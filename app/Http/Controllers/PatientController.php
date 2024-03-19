<?php

namespace App\Http\Controllers;

use App\Models\AdaptedWalsallScore;
use App\Models\Allergies;
use App\Models\Communication;
use App\Models\ContinenceCare;
use App\Models\CovidTest;
use App\Models\DietaryRisk;
use App\Models\DressingSupport;
use App\Models\EmergencyActionPlan;
use App\Models\EndLife;
use App\Models\EnviromentalRisk;
use App\Models\ExtraNeed;
use App\Models\FallsRisk;
use App\Models\FireSafetyRisk;
use App\Models\GeneralTidyUp;
use App\Models\Medication;
use App\Models\MedicationRisk;
use App\Models\Mobility;
use App\Models\MobilityAndTransferRisk;
use App\Models\MyHealth;
use App\Models\MyInformation;
use App\Models\MyLifeStyle;
use App\Models\MyPreferredCallSupport;
use App\Models\NutritionHydration;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\PersonalCare;
use Yajra\DataTables\DataTables;
use App\Models\User;
use App\Models\PersonalContactDetails;
use App\Models\PressureUlcerRecord;
use App\Models\RestraintRisk;
use App\Models\SkinCare;
use App\Models\SocialInterestActivities;
use App\Models\WashAndShower;
use Carbon\Carbon;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index');
    }

    public function getPatient(Request $request)
    {
        if ($request->ajax()) {
            $data = Patient::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('status', function ($status) {
                    return $status->status == 1 ? 'Active' : 'Inactive';
                })
                ->addColumn('action', function($row){
                    $btn = '<ul class="list-unstyled hstack gap-1 mb-0"><li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><a href="patient/'.$row->id.'/edit" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a></li><li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" onclick="setDelete('.$row->id.')"><a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a></li></ul>';
                    return $btn;
                })
                ->addColumn('button', function($row){
                    $button = '<a href="care-plan/'.$row->id.'" class="btn btn-primary w-md">Risk Assessment</a>';
                    return $button;
                })
                ->rawColumns(['action', 'status', 'button'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assistantList = User::where('role', 'Assistant')->get();
        return view('patient.create', compact('assistantList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);
        $requestData = $request->all();
        if ($request->status == "on") {
            $requestData['status'] = 1;
        } else {
            $requestData['status'] = 0;
        }
        $requestData['dob'] = Carbon::createFromFormat('d-m-Y', $requestData['dob'])->format('Y-m-d');
        Patient::create($requestData);
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $assistantList = User::where('role', 'Assistant')->get();
        return view('patient.edit', compact('patient', 'assistantList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);
        $requestData = $request->all();
        if ($request->status == "on") {
            $requestData['status'] = 1;
        } else {
            $requestData['status'] = 0;
        }
        $requestData['dob'] = Carbon::createFromFormat('d-m-Y', $requestData['dob'])->format('Y-m-d');
        Patient::find($id)->update($requestData);
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if ($request->ajax()) {
            $patient = Patient::find($id);
            if ($patient) {
                $patient->delete();
                return response()->json([
                    'status'  => 200,
                    'message' => "Customer Deleted Successfully",
                ]);
            }
            return response()->json([
                'status'  => 500,
                'message' => "Unable to Delete Customer",
            ]);
        }
    }

    public function dashboards(Request $request) {

    }

    public function careplan($id) {
        $patient = Patient::find($id);
        return view('patient.careplan', compact('patient'));
    }

    public function personalCare($id) {
        $patient = Patient::find($id);
        $personalCare = PersonalCare::where('patient_id', $id)->first();
        $checkedValues = $personalCare->care_support_need ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $otherCheckedValues = $personalCare->while_seated ?? null;
        if ($otherCheckedValues !== null) {
            $otherCheckedValues = json_decode($otherCheckedValues);
        }
        $otherCheckedValues1 = $personalCare->shaving_support_need ?? null;
        if ($otherCheckedValues1 !== null) {
            $otherCheckedValues1 = json_decode($otherCheckedValues1);
        }
        return view('patient.personal-care', compact('patient', 'personalCare', 'checkedValues', 'otherCheckedValues', 'otherCheckedValues1'));
    }

    public function storePersonalCare(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['other_outcomes_check'])) {
            $requestData['other_outcomes_check'] = json_encode($requestData['other_outcomes_check']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['care_support_need'])) {
            $requestData['care_support_need'] = json_encode($requestData['care_support_need']);
        }
        if (isset($requestData['while_seated'])) {
            $requestData['while_seated'] = json_encode($requestData['while_seated']);
        }
        if (isset($requestData['shaving_support_need'])) {
            $requestData['shaving_support_need'] = json_encode($requestData['shaving_support_need']);
        }
        PersonalCare::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('personalCare', ['id' => $id]);
    }

    public function covid19($id) {
        $patient = Patient::find($id);
        $covidTest = CovidTest::where('patient_id', $id)->first();
        return view('patient.covid-19', compact('patient', 'covidTest'));
    }

    public function storeCovid19(Request $request, $id) {
        $requestData = $request->all();
        if ($requestData['when_service_user_tested_date']) {
            $requestData['when_service_user_tested_date'] = Carbon::createFromFormat('d-m-Y', $requestData['when_service_user_tested_date'])->format('Y-m-d');
        }
        $requestData['first_dose'] = $requestData['first_dose'] ?? null;
        $requestData['second_dose'] = $requestData['second_dose'] ?? null;
        $requestData['third_dose'] = $requestData['third_dose'] ?? null;
        $requestData['fourth_dose'] = $requestData['fourth_dose'] ?? null;
        $requestData['other_dose'] = $requestData['other_dose'] ?? null;
        CovidTest::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('covid19', ['id' => $id]);
    }

    public function communication($id) {
        $patient = Patient::find($id);
        $communication = Communication::where('patient_id', $id)->first();
        return view('patient.communication', compact('patient', 'communication'));
    }

    public function storeCommunication(Request $request, $id) {
        Communication::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('communication', ['id' => $id]);
    }

    public function personalContact($id) {
        $patient = Patient::find($id);
        $patientDetails = PersonalContactDetails::where('patient_id', $id)->first();
        return view('patient.personal-contact-details', compact('patient', 'patientDetails'));
    }

    public function storePersonalContact(Request $request, $id) {
        PersonalContactDetails::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('personalContact', ['id' => $id]);
    }

    public function myInformation($id) {
        $patient = Patient::find($id);
        $myInformation = MyInformation::where('patient_id', $id)->first();
        $formattedDateTime = $myInformation->funding_date_time ? Carbon::parse($myInformation->funding_date_time)->format('Y-m-d H:i') : null;
        return view('patient.my-information', compact('patient', 'myInformation', 'formattedDateTime'));
    }

    public function storeMyInformation(Request $request, $id) {

        MyInformation::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('myInformation', ['id' => $id]);
    }

    public function enviromentalRisk($id) {
        $patient = Patient::find($id);
        $enviromentalRisk = EnviromentalRisk::where('patient_id', $id)->first();
        return view('patient.enviromental-risk', compact('patient', 'enviromentalRisk'));
    }

    public function storeEnviromentalRisk(Request $request, $id) {
        EnviromentalRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('enviromentalRisk', ['id' => $id]);
    }

    public function fireSefatyRisk($id) {
        $patient = Patient::find($id);
        $fireSefatyRisk = FireSafetyRisk::where('patient_id', $id)->first();
        return view('patient.fire-sefaty-risk', compact('patient', 'fireSefatyRisk'));
    }

    public function storeFireSefatyRisk(Request $request, $id) {
        FireSafetyRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('fireSefatyRisk', ['id' => $id]);
    }

    public function myHealth($id) {
        $patient = Patient::find($id);
        $myHealth = MyHealth::where('patient_id', $id)->first();
        return view('patient.my-health', compact('patient', 'myHealth'));
    }

    public function storeMyHealth(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['other_outcomes_check'])) {
            $requestData['other_outcomes_check'] = json_encode($requestData['other_outcomes_check']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        MyHealth::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('myHealth', ['id' => $id]);
    }

    public function allergies($id) {
        $patient = Patient::find($id);
        $allergies = Allergies::where('patient_id', $id)->first();
        $checkedValues = $allergies->mental_capacity_decision ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        return view('patient.allergies', compact('patient', 'allergies', 'checkedValues'));
    }

    public function storeAllergies(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['mental_capacity_decision'])) {
            $requestData['mental_capacity_decision'] = json_encode($requestData['mental_capacity_decision']);
        }
        Allergies::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('allergies', ['id' => $id]);
    }

    public function myLifeStyle($id) {
        $patient = Patient::find($id);
        $myLifeStyle = MyLifeStyle::where('patient_id', $id)->first();
        return view('patient.my-lifestyle', compact('patient','myLifeStyle'));
    }

    public function storeMyLifeStyle(Request $request, $id) {
        MyLifeStyle::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('myLifeStyle', ['id' => $id]);
    }

    public function mobility($id) {
        $patient = Patient::find($id);
        $mobility = Mobility::where('patient_id', $id)->first();
        $transferPlace = $mobility->transfer_place ?? null;
        if ($transferPlace !== null) {
            $transferPlace = json_decode($transferPlace);
        }
        $checkedValues = $mobility->support_care_need ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $otherCheckedValues = $mobility->other_equipment ?? null;
        if ($otherCheckedValues !== null) {
            $otherCheckedValues = json_decode($otherCheckedValues);
        }

        return view('patient.mobility', compact('patient', 'mobility', 'checkedValues', 'otherCheckedValues', 'transferPlace'));
    }

    public function storeMobility(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['transfer_place'])) {
            $requestData['transfer_place'] = json_encode($requestData['transfer_place']);
        }
        if (isset($requestData['other_outcomes_check'])) {
            $requestData['other_outcomes_check'] = json_encode($requestData['other_outcomes_check']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['equipment_place'])) {
            $requestData['equipment_place'] = json_encode($requestData['equipment_place']);
        }
        if (isset($requestData['other_equipment'])) {
            $requestData['other_equipment'] = json_encode($requestData['other_equipment']);
        }
        Mobility::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('mobility', ['id' => $id]);
    }

    public function mobilityTransferRisk($id) {
        $patient = Patient::find($id);
        $mobilityTransferRisk = MobilityAndTransferRisk::where('patient_id', $id)->first();
        return view('patient.mobility-transfer-risk', compact('patient', 'mobilityTransferRisk'));
    }

    public function storeMobilityTransferRisk(Request $request, $id) {
        MobilityAndTransferRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('mobilityTransferRisk', ['id' => $id]);
    }

    public function fallsRisk($id) {
        $patient = Patient::find($id);
        $fallsRisk = FallsRisk::where('patient_id', $id)->first();
        return view('patient.falls-risk', compact('patient', 'fallsRisk'));
    }

    public function storeFallsRisk(Request $request, $id) {
        FallsRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('fallsRisk', ['id' => $id]);
    }

    public function medicationRisk($id) {
        $patient = Patient::find($id);
        $medicationRisk = MedicationRisk::where('patient_id', $id)->first();
        return view('patient.medication-risk', compact('patient', 'medicationRisk'));
    }

    public function storeMedicationRisk(Request $request, $id) {
        MedicationRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('medicationRisk', ['id' => $id]);
    }

    public function generalTidy($id) {
        $patient = Patient::find($id);
        $generalTidy = GeneralTidyUp::where('patient_id', $id)->first();
        return view('patient.general-tidy', compact('patient', 'generalTidy'));
    }

    public function storeGeneralTidy(Request $request, $id) {
        GeneralTidyUp::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('generalTidy', ['id' => $id]);
    }

    public function socialInterest($id) {
        $patient = Patient::find($id);
        $socialInterest = SocialInterestActivities::where('patient_id', $id)->first();
        return view('patient.social-interest', compact('patient', 'socialInterest'));
    }

    public function storeSocialInterest(Request $request, $id) {
        SocialInterestActivities::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('socialInterest', ['id' => $id]);
    }

    public function dietaryRisk($id) {
        $patient = Patient::find($id);
        $dietaryRisk = DietaryRisk::where('patient_id', $id)->first();
        return view('patient.dietary-risk', compact('patient', 'dietaryRisk'));
    }

    public function storeDietaryRisk(Request $request, $id) {
        DietaryRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('dietaryRisk', ['id' => $id]);
    }

    public function restraintRisk($id) {
        $patient = Patient::find($id);
        $restraintRisk = RestraintRisk::where('patient_id', $id)->first();
        return view('patient.restraint-risk', compact('patient', 'restraintRisk'));
    }

    public function storeRestraintRisk(Request $request, $id) {
        RestraintRisk::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('restraintRisk', ['id' => $id]);
    }

    public function endLife($id) {
        $patient = Patient::find($id);
        $endLife = EndLife::where('patient_id', $id)->first();
        return view('patient.end-life', compact('patient', 'endLife'));
    }

    public function storeEndLife(Request $request, $id) {
        EndLife::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('endLife', ['id' => $id]);
    }

    public function extraNeed($id) {
        $patient = Patient::find($id);
        $extraNeed = ExtraNeed::where('patient_id', $id)->first();
        return view('patient.extra-need', compact('patient', 'extraNeed'));
    }

    public function storeExtraNeed(Request $request, $id) {
        ExtraNeed::updateOrCreate(['patient_id' => $id], $request->all());
        return redirect()->route('extraNeed', ['id' => $id]);
    }

    public function emergencyActionPlan($id) {
        $patient = Patient::find($id);
        $emergencyActionPlan = EmergencyActionPlan::where('patient_id', $id)->first();
        return view('patient.emergency-action-plan', compact('patient', 'emergencyActionPlan'));
    }

    public function storeEmergencyActionPlan(Request $request, $id) {
        $requestData = $request->all();
        $existingForm = EmergencyActionPlan::where('patient_id', $id)
            ->first();
        $requestData['gaining_signature'] = $existingForm ? $existingForm->gaining_signature : null;
        $requestData['representative_signature'] = $existingForm ? $existingForm->representative_signature : null;
        $requestData['signature'] = $existingForm ? $existingForm->signature : null;
        if (isset($request->gaining_signature) && !empty($request->gaining_signature)) {
            $image_parts = explode(";base64,", $request->gaining_signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signFileName = time() . '_' . uniqid() . '.' . $image_type;
            $destinationPath = public_path('/patient/signature');
            $file = $destinationPath . '/' . $signFileName;
            file_put_contents($file, $image_base64);
            $requestData['gaining_signature'] = asset('patient/signature/' . $signFileName);
        }
        if (isset($request->representative_signature) && !empty($request->representative_signature)) {
            $image_parts = explode(";base64,", $request->representative_signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signFileName = time() . '_' . uniqid() . '.' . $image_type;
            $destinationPath = public_path('/patient/signature');
            $file = $destinationPath . '/' . $signFileName;
            file_put_contents($file, $image_base64);
            $requestData['representative_signature'] = asset('patient/signature/' . $signFileName);
        }
        if (isset($request->signature) && !empty($request->signature)) {
            $image_parts = explode(";base64,", $request->signature);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $signFileName = time() . '_' . uniqid() . '.' . $image_type;
            $destinationPath = public_path('/patient/signature');
            $file = $destinationPath . '/' . $signFileName;
            file_put_contents($file, $image_base64);
            $requestData['signature'] = asset('patient/signature/' . $signFileName);
        }
        EmergencyActionPlan::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('emergencyActionPlan', ['id' => $id]);
    }

    public function washAndShower($id) {
        $patient = Patient::find($id);
        $washAndShower = WashAndShower::where('patient_id', $id)->first();
        $checkedValues = $washAndShower->support_care_need ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $checkedValues1 = $washAndShower->additional_thing ?? null;
        if ($checkedValues1 !== null) {
            $checkedValues1 = json_decode($checkedValues1);
        }
        $checkedValues2 = $washAndShower->wash ?? null;
        if ($checkedValues2 !== null) {
            $checkedValues2 = json_decode($checkedValues2);
        }
        return view('patient.wash-and-shower', compact('patient', 'washAndShower', 'checkedValues', 'checkedValues1', 'checkedValues2'));
    }

    public function storeWashAndShower(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['wash'])) {
            $requestData['wash'] = json_encode($requestData['wash']);
        }
        if (isset($requestData['other_outcomes_check'])) {
            $requestData['other_outcomes_check'] = json_encode($requestData['other_outcomes_check']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['support_care_need'])) {
            $requestData['support_care_need'] = json_encode($requestData['support_care_need']);
        }
        if (isset($requestData['additional_thing'])) {
            $requestData['additional_thing'] = json_encode($requestData['additional_thing']);
        }
        WashAndShower::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('washAndShower', ['id' => $id]);
    }

    public function dressingSupport($id) {
        $patient = Patient::find($id);
        $dressingSupport = DressingSupport::where('patient_id', $id)->first();
        $checkedMorningClothes = $dressingSupport->morning_wear_clothes ?? null;
        if ($checkedMorningClothes !== null) {
            $checkedMorningClothes = json_decode($checkedMorningClothes);
        }
        $checkedEveningClothes = $dressingSupport->evening_wear_clothes ?? null;
        if ($checkedEveningClothes !== null) {
            $checkedEveningClothes = json_decode($checkedEveningClothes);
        }
        $checkedValues = $dressingSupport->change_cloth ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $checkedValues1 = $dressingSupport->upper_body_strength ?? null;
        if ($checkedValues1 !== null) {
            $checkedValues1 = json_decode($checkedValues1);
        }
        $checkedValues2 = $dressingSupport->lower_body_strength ?? null;
        if ($checkedValues2 !== null) {
            $checkedValues2 = json_decode($checkedValues2);
        }
        return view('patient.dressing-support', compact('patient', 'dressingSupport', 'checkedValues', 'checkedValues1', 'checkedValues2', 'checkedMorningClothes', 'checkedEveningClothes'));
    }

    public function storeDressingSupport(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['morning_wear_clothes'])) {
            $requestData['morning_wear_clothes'] = json_encode($requestData['morning_wear_clothes']);
        }
        if (isset($requestData['evening_wear_clothes'])) {
            $requestData['evening_wear_clothes'] = json_encode($requestData['evening_wear_clothes']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['change_cloth'])) {
            $requestData['change_cloth'] = json_encode($requestData['change_cloth']);
        }
        if (isset($requestData['upper_body_strength'])) {
            $requestData['upper_body_strength'] = json_encode($requestData['upper_body_strength']);
        }
        if (isset($requestData['lower_body_strength'])) {
            $requestData['lower_body_strength'] = json_encode($requestData['lower_body_strength']);
        }
        DressingSupport::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('dressingSupport', ['id' => $id]);
    }

    public function nutritionHydration($id) {
        $patient = Patient::find($id);
        $nutritionHydration = NutritionHydration::where('patient_id', $id)->first();
        $checkedValues = $nutritionHydration->maintain_nutrition ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $feedingCheckedValues = $nutritionHydration->feeding_support ?? null;
        if ($feedingCheckedValues !== null) {
            $feedingCheckedValues = json_decode($feedingCheckedValues);
        }
        return view('patient.nutrition-hydration', compact('patient', 'nutritionHydration', 'checkedValues', 'feedingCheckedValues'));
    }

    public function storeNutritionHydration(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['feeding_support'])) {
            $requestData['feeding_support'] = json_encode($requestData['feeding_support']);
        }
        if (isset($requestData['maintain_nutrition'])) {
            $requestData['maintain_nutrition'] = json_encode($requestData['maintain_nutrition']);
        }
        NutritionHydration::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('nutritionHydration', ['id' => $id]);
    }

    public function skinCare($id) {
        $patient = Patient::find($id);
        $skinCare = SkinCare::where('patient_id', $id)->first();
        $checkedValues = $skinCare->skin_integrity ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $checkedValues1 = $skinCare->squeeze_where_apply_cream ?? null;
        if ($checkedValues1 !== null) {
            $checkedValues1 = json_decode($checkedValues1);
        }
        $checkedValues2 = $skinCare->open_box_where_apply_cream ?? null;
        if ($checkedValues2 !== null) {
            $checkedValues2 = json_decode($checkedValues2);
        }
        $checkedValues3 = $skinCare->lower_strength_stand_up_from ?? null;
        if ($checkedValues3 !== null) {
            $checkedValues3 = json_decode($checkedValues3);
        }
        return view('patient.skin-care', compact('patient', 'skinCare', 'checkedValues', 'checkedValues1', 'checkedValues2', 'checkedValues3'));
    }

    public function storeSkinCare(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['squeeze_where_apply_cream'])) {
            $requestData['squeeze_where_apply_cream'] = json_encode($requestData['squeeze_where_apply_cream']);
        }
        if (isset($requestData['open_box_where_apply_cream'])) {
            $requestData['open_box_where_apply_cream'] = json_encode($requestData['open_box_where_apply_cream']);
        }
        if (isset($requestData['lower_strength_stand_up_from'])) {
            $requestData['lower_strength_stand_up_from'] = json_encode($requestData['lower_strength_stand_up_from']);
        }
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['skin_integrity'])) {
            $requestData['skin_integrity'] = json_encode($requestData['skin_integrity']);
        }
        if (isset($requestData['cream_name'])) {
            $requestData['cream_name'] = json_encode($requestData['cream_name']);
        }
        if (isset($requestData['location_cream'])) {
            $requestData['location_cream'] = json_encode($requestData['location_cream']);
        }
        SkinCare::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('skinCare', ['id' => $id]);
    }

    public function adaptedWalsallCare($id) {
        $patient = Patient::find($id);
        $adaptedWalsallCare = AdaptedWalsallScore::where('patient_id', $id)->first();
        return view('patient.adapted-walsall-care', compact('patient', 'adaptedWalsallCare'));
    }

    public function storeAdaptedWalsallCare(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['maintain_nutrition'])) {
            $requestData['maintain_nutrition'] = json_encode($requestData['maintain_nutrition']);
        }
        AdaptedWalsallScore::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('adaptedWalsallCare', ['id' => $id]);
    }

    public function pressureUlcerRecordTool($id) {
        $patient = Patient::find($id);
        $pressureUlcerRecordTool = PressureUlcerRecord::where('patient_id', $id)->first();
        return view('patient.pressure-ulcer-record-tool', compact('patient', 'pressureUlcerRecordTool'));
    }

    public function storePressureUlcerRecordTool(Request $request, $id) {
        $requestData = $request->all();
        PressureUlcerRecord::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('pressureUlcerRecordTool', ['id' => $id]);
    }

    public function continenceCare($id) {
        $patient = Patient::find($id);
        $continenceCare = ContinenceCare::where('patient_id', $id)->first();
        $checkedValues = $continenceCare->ordering_catheter_bags ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        return view('patient.continence-care', compact('patient', 'continenceCare', 'checkedValues'));
    }

    public function storeContinenceCare(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['other_outcomes_text'])) {
            $requestData['other_outcomes_text'] = json_encode($requestData['other_outcomes_text']);
        }
        if (isset($requestData['ordering_catheter_bags'])) {
            $requestData['ordering_catheter_bags'] = json_encode($requestData['ordering_catheter_bags']);
        }
        ContinenceCare::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('continenceCare', ['id' => $id]);
    }

    public function medication($id) {
        $patient = Patient::find($id);
        $medication = Medication::where('patient_id', $id)->first();
        $checkedValues = $medication->who_support_medication_eye ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $checkedValues1 = $medication->who_support_medication_patches ?? null;
        if ($checkedValues1 !== null) {
            $checkedValues1 = json_decode($checkedValues1);
        }
        $checkedValues2 = $medication->who_support_medication_prescribed ?? null;
        if ($checkedValues2 !== null) {
            $checkedValues2 = json_decode($checkedValues2);
        }
        $checkedValues3 = $medication->who_support_medication_inhaler ?? null;
        if ($checkedValues3 !== null) {
            $checkedValues3 = json_decode($checkedValues3);
        }
        return view('patient.medication', compact('patient', 'medication', 'checkedValues', 'checkedValues1', 'checkedValues2', 'checkedValues3'));
    }

    public function storeMedication(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['who_support_medication_eye'])) {
            $requestData['who_support_medication_eye'] = json_encode($requestData['who_support_medication_eye']);
        }
        if (isset($requestData['who_support_medication_patches'])) {
            $requestData['who_support_medication_patches'] = json_encode($requestData['who_support_medication_patches']);
        }
        if (isset($requestData['who_support_medication_prescribed'])) {
            $requestData['who_support_medication_prescribed'] = json_encode($requestData['who_support_medication_prescribed']);
        }
        if (isset($requestData['who_support_medication_inhaler'])) {
            $requestData['who_support_medication_inhaler'] = json_encode($requestData['who_support_medication_inhaler']);
        }
        Medication::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('medication', ['id' => $id]);
    }

    public function preferredCallSupport($id) {
        $patient = Patient::find($id);
        $preferredCallSupport = MyPreferredCallSupport::where('patient_id', $id)->first();
        $checkedValues = $preferredCallSupport->morning_call_personal_care ?? null;
        if ($checkedValues !== null) {
            $checkedValues = json_decode($checkedValues);
        }
        $checkedValues1 = $preferredCallSupport->morning_call_transfer ?? null;
        if ($checkedValues1 !== null) {
            $checkedValues1 = json_decode($checkedValues1);
        }
        $checkedValues2 = $preferredCallSupport->morning_call_food ?? null;
        if ($checkedValues2 !== null) {
            $checkedValues2 = json_decode($checkedValues2);
        }
        $checkedValues3 = $preferredCallSupport->morning_call_stoma_care ?? null;
        if ($checkedValues3 !== null) {
            $checkedValues3 = json_decode($checkedValues3);
        }
        $checkedValues4 = $preferredCallSupport->morning_call_medication ?? null;
        if ($checkedValues4 !== null) {
            $checkedValues4 = json_decode($checkedValues4);
        }
        $checkedValues5 = $preferredCallSupport->morning_call_change_bed ?? null;
        if ($checkedValues5 !== null) {
            $checkedValues5 = json_decode($checkedValues5);
        }

        $checkedValues6 = $preferredCallSupport->lunch_call_personal_care ?? null;
        if ($checkedValues6 !== null) {
            $checkedValues6 = json_decode($checkedValues6);
        }
        $checkedValues7 = $preferredCallSupport->lunch_call_transfer ?? null;
        if ($checkedValues7 !== null) {
            $checkedValues7 = json_decode($checkedValues7);
        }
        $checkedValues8 = $preferredCallSupport->lunch_call_food ?? null;
        if ($checkedValues8 !== null) {
            $checkedValues8 = json_decode($checkedValues8);
        }
        $checkedValues9 = $preferredCallSupport->lunch_call_stoma_care ?? null;
        if ($checkedValues9 !== null) {
            $checkedValues9 = json_decode($checkedValues9);
        }
        $checkedValues10 = $preferredCallSupport->lunch_call_medication ?? null;
        if ($checkedValues10 !== null) {
            $checkedValues10 = json_decode($checkedValues10);
        }
        $checkedValues11 = $preferredCallSupport->lunch_call_change_bed ?? null;
        if ($checkedValues11 !== null) {
            $checkedValues11 = json_decode($checkedValues11);
        }

        $checkedValues12 = $preferredCallSupport->tea_call_personal_care ?? null;
        if ($checkedValues12 !== null) {
            $checkedValues12 = json_decode($checkedValues12);
        }
        $checkedValues13 = $preferredCallSupport->tea_call_transfer ?? null;
        if ($checkedValues13 !== null) {
            $checkedValues13 = json_decode($checkedValues13);
        }
        $checkedValues14 = $preferredCallSupport->tea_call_food ?? null;
        if ($checkedValues14 !== null) {
            $checkedValues14 = json_decode($checkedValues14);
        }
        $checkedValues15 = $preferredCallSupport->tea_call_stoma ?? null;
        if ($checkedValues15 !== null) {
            $checkedValues15 = json_decode($checkedValues15);
        }
        $checkedValues16 = $preferredCallSupport->tea_medication ?? null;
        if ($checkedValues16 !== null) {
            $checkedValues16 = json_decode($checkedValues16);
        }
        $checkedValues17 = $preferredCallSupport->tea_change_bed_text ?? null;
        if ($checkedValues17 !== null) {
            $checkedValues17 = json_decode($checkedValues17);
        }

        $checkedValues18 = $preferredCallSupport->tuck_call_personal_care_carer ?? null;
        if ($checkedValues18 !== null) {
            $checkedValues18 = json_decode($checkedValues18);
        }
        $checkedValues19 = $preferredCallSupport->tuck_call_transfer_carer ?? null;
        if ($checkedValues19 !== null) {
            $checkedValues19 = json_decode($checkedValues19);
        }
        $checkedValues20 = $preferredCallSupport->tuck_call_food_carer ?? null;
        if ($checkedValues20 !== null) {
            $checkedValues20 = json_decode($checkedValues20);
        }
        $checkedValues21 = $preferredCallSupport->tuck_call_stoma_care_carer ?? null;
        if ($checkedValues21 !== null) {
            $checkedValues21 = json_decode($checkedValues21);
        }
        $checkedValues22 = $preferredCallSupport->tuck_call_medication_carer ?? null;
        if ($checkedValues22 !== null) {
            $checkedValues22 = json_decode($checkedValues22);
        }
        $checkedValues23 = $preferredCallSupport->tuck_call_change_carer ?? null;
        if ($checkedValues23 !== null) {
            $checkedValues23 = json_decode($checkedValues23);
        }
        return view('patient.my-preferred-call-support', compact('patient', 'preferredCallSupport', 'checkedValues', 'checkedValues1', 'checkedValues2', 'checkedValues3', 'checkedValues4', 'checkedValues5', 'checkedValues6', 'checkedValues7', 'checkedValues8', 'checkedValues9', 'checkedValues10', 'checkedValues11', 'checkedValues12', 'checkedValues13', 'checkedValues14', 'checkedValues15', 'checkedValues16', 'checkedValues17', 'checkedValues18', 'checkedValues19', 'checkedValues20', 'checkedValues21', 'checkedValues22', 'checkedValues23'));
    }

    public function storePreferredCallSupport(Request $request, $id) {
        $requestData = $request->all();
        if (isset($requestData['morning_call_personal_care'])) {
            $requestData['morning_call_personal_care'] = json_encode($requestData['morning_call_personal_care']);
        }
        if (isset($requestData['morning_call_transfer'])) {
            $requestData['morning_call_transfer'] = json_encode($requestData['morning_call_transfer']);
        }
        if (isset($requestData['morning_call_food'])) {
            $requestData['morning_call_food'] = json_encode($requestData['morning_call_food']);
        }
        if (isset($requestData['morning_call_stoma_care'])) {
            $requestData['morning_call_stoma_care'] = json_encode($requestData['morning_call_stoma_care']);
        }
        if (isset($requestData['morning_call_medication'])) {
            $requestData['morning_call_medication'] = json_encode($requestData['morning_call_medication']);
        }
        if (isset($requestData['morning_call_change_bed'])) {
            $requestData['morning_call_change_bed'] = json_encode($requestData['morning_call_change_bed']);
        }

        if (isset($requestData['lunch_call_personal_care'])) {
            $requestData['lunch_call_personal_care'] = json_encode($requestData['lunch_call_personal_care']);
        }
        if (isset($requestData['lunch_call_transfer'])) {
            $requestData['lunch_call_transfer'] = json_encode($requestData['lunch_call_transfer']);
        }
        if (isset($requestData['lunch_call_food'])) {
            $requestData['lunch_call_food'] = json_encode($requestData['lunch_call_food']);
        }
        if (isset($requestData['lunch_call_stoma_care'])) {
            $requestData['lunch_call_stoma_care'] = json_encode($requestData['lunch_call_stoma_care']);
        }
        if (isset($requestData['lunch_call_medication'])) {
            $requestData['lunch_call_medication'] = json_encode($requestData['lunch_call_medication']);
        }
        if (isset($requestData['lunch_call_change_bed'])) {
            $requestData['lunch_call_change_bed'] = json_encode($requestData['lunch_call_change_bed']);
        }

        if (isset($requestData['tea_call_personal_care'])) {
            $requestData['tea_call_personal_care'] = json_encode($requestData['tea_call_personal_care']);
        }
        if (isset($requestData['tea_call_transfer'])) {
            $requestData['tea_call_transfer'] = json_encode($requestData['tea_call_transfer']);
        }
        if (isset($requestData['tea_call_food'])) {
            $requestData['tea_call_food'] = json_encode($requestData['tea_call_food']);
        }
        if (isset($requestData['tea_call_stoma'])) {
            $requestData['tea_call_stoma'] = json_encode($requestData['tea_call_stoma']);
        }
        if (isset($requestData['tea_medication'])) {
            $requestData['tea_medication'] = json_encode($requestData['tea_medication']);
        }
        if (isset($requestData['tea_change_bed_text'])) {
            $requestData['tea_change_bed_text'] = json_encode($requestData['tea_change_bed_text']);
        }

        if (isset($requestData['tuck_call_personal_care_carer'])) {
            $requestData['tuck_call_personal_care_carer'] = json_encode($requestData['tuck_call_personal_care_carer']);
        }
        if (isset($requestData['tuck_call_transfer_carer'])) {
            $requestData['tuck_call_transfer_carer'] = json_encode($requestData['tuck_call_transfer_carer']);
        }
        if (isset($requestData['tuck_call_food_carer'])) {
            $requestData['tuck_call_food_carer'] = json_encode($requestData['tuck_call_food_carer']);
        }
        if (isset($requestData['tuck_call_stoma_care_carer'])) {
            $requestData['tuck_call_stoma_care_carer'] = json_encode($requestData['tuck_call_stoma_care_carer']);
        }
        if (isset($requestData['tuck_call_medication_carer'])) {
            $requestData['tuck_call_medication_carer'] = json_encode($requestData['tuck_call_medication_carer']);
        }
        if (isset($requestData['tuck_call_change_carer'])) {
            $requestData['tuck_call_change_carer'] = json_encode($requestData['tuck_call_change_carer']);
        }
        MyPreferredCallSupport::updateOrCreate(['patient_id' => $id], $requestData);
        return redirect()->route('preferredCallSupport', ['id' => $id]);
    }
}
