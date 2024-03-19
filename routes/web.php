<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AssistantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::resource('patient', PatientController::class);
    Route::get('dashboards', [PatientController::class, 'dashboards'])->name('dashboards');
    Route::get('care-plan', [PatientController::class, 'careplan'])->name('careplan');
    Route::get('get-patient-list', [PatientController::class, 'getPatient'])->name('getPatient');
    Route::get('care-plan/{id}', [PatientController::class, 'careplan'])->name('careplan');

    Route::get('patient/parsonal-care/{id}', [PatientController::class, 'personalCare'])->name('personalCare');
    Route::post('store-parsonal-care/{id}', [PatientController::class, 'storePersonalCare'])->name('storePersonalCare');

    // Route::post('store-parsonal-care/{id}', [PatientController::class, 'storePersonalCare'])->name('storePersonalCare');

    Route::get('patient/covid-19/{id}', [PatientController::class, 'covid19'])->name('covid19');
    Route::post('store-covid-19/{id}', [PatientController::class, 'storeCovid19'])->name('storeCovid19');

    Route::get('patient/communication/{id}', [PatientController::class, 'communication'])->name('communication');
    Route::post('store-communication/{id}', [PatientController::class, 'storeCommunication'])->name('storeCommunication');

    Route::get('patient/parsonal-contact/{id}', [PatientController::class, 'personalContact'])->name('personalContact');
    Route::post('store-parsonal-contact/{id}', [PatientController::class, 'storePersonalContact'])->name('storePersonalContact');

    Route::get('patient/my-information/{id}', [PatientController::class, 'myInformation'])->name('myInformation');
    Route::post('store-my-information/{id}', [PatientController::class, 'storeMyInformation'])->name('storeMyInformation');

    Route::get('patient/enviromental-risk/{id}', [PatientController::class, 'enviromentalRisk'])->name('enviromentalRisk');
    Route::post('store-enviromental-risk/{id}', [PatientController::class, 'storeEnviromentalRisk'])->name('storeEnviromentalRisk');

    Route::get('patient/fire-sefaty-risk/{id}', [PatientController::class, 'fireSefatyRisk'])->name('fireSefatyRisk');
    Route::post('store-fire-sefaty-risk/{id}', [PatientController::class, 'storeFireSefatyRisk'])->name('storeFireSefatyRisk');

    Route::get('patient/my-health/{id}', [PatientController::class, 'myHealth'])->name('myHealth');
    Route::post('store-my-health/{id}', [PatientController::class, 'storeMyHealth'])->name('storeMyHealth');

    Route::get('patient/allergies/{id}', [PatientController::class, 'allergies'])->name('allergies');
    Route::post('store-allergies/{id}', [PatientController::class, 'storeAllergies'])->name('storeAllergies');

    Route::get('patient/my-lifestyle/{id}', [PatientController::class, 'myLifeStyle'])->name('myLifeStyle');
    Route::post('store-my-lifestyle/{id}', [PatientController::class, 'storeMyLifeStyle'])->name('storeMyLifeStyle');

    Route::get('patient/mobility/{id}', [PatientController::class, 'mobility'])->name('mobility');
    Route::post('store-mobility/{id}', [PatientController::class, 'storeMobility'])->name('storeMobility');

    Route::get('patient/mobility-transfer-risk/{id}', [PatientController::class, 'mobilityTransferRisk'])->name('mobilityTransferRisk');
    Route::post('store-mobility-transfer-risk/{id}', [PatientController::class, 'storeMobilityTransferRisk'])->name('storeMobilityTransferRisk');

    Route::get('patient/falls-risk/{id}', [PatientController::class, 'fallsRisk'])->name('fallsRisk');
    Route::post('store-falls-risk/{id}', [PatientController::class, 'storeFallsRisk'])->name('storeFallsRisk');

    Route::get('patient/medication-risk/{id}', [PatientController::class, 'medicationRisk'])->name('medicationRisk');
    Route::post('store-medication-risk/{id}', [PatientController::class, 'storeMedicationRisk'])->name('storeMedicationRisk');

    Route::get('patient/general-tidy/{id}', [PatientController::class, 'generalTidy'])->name('generalTidy');
    Route::post('store-general-tidy/{id}', [PatientController::class, 'storeGeneralTidy'])->name('storeGeneralTidy');

    Route::get('patient/social-interest/{id}', [PatientController::class, 'socialInterest'])->name('socialInterest');
    Route::post('store-social-interest/{id}', [PatientController::class, 'storeSocialInterest'])->name('storeSocialInterest');

    Route::get('patient/dietary-risk/{id}', [PatientController::class, 'dietaryRisk'])->name('dietaryRisk');
    Route::post('store-dietary-risk/{id}', [PatientController::class, 'storeDietaryRisk'])->name('storeDietaryRisk');

    Route::get('patient/restraint-risk/{id}', [PatientController::class, 'restraintRisk'])->name('restraintRisk');
    Route::post('store-restraint-risk/{id}', [PatientController::class, 'storeRestraintRisk'])->name('storeRestraintRisk');

    Route::get('patient/end-life/{id}', [PatientController::class, 'endLife'])->name('endLife');
    Route::post('store-end-life/{id}', [PatientController::class, 'storeEndLife'])->name('storeEndLife');

    Route::get('patient/extra-need/{id}', [PatientController::class, 'extraNeed'])->name('extraNeed');
    Route::post('store-extra-need/{id}', [PatientController::class, 'storeExtraNeed'])->name('storeExtraNeed');

    Route::get('patient/emergency-action-plan/{id}', [PatientController::class, 'emergencyActionPlan'])->name('emergencyActionPlan');
    Route::post('store-emergency-action-plan/{id}', [PatientController::class, 'storeEmergencyActionPlan'])->name('storeEmergencyActionPlan');

    Route::get('patient/wash-and-shower/{id}', [PatientController::class, 'washAndShower'])->name('washAndShower');
    Route::post('store-wash-and-shower/{id}', [PatientController::class, 'storeWashAndShower'])->name('storeWashAndShower');

    Route::get('patient/dressing-support/{id}', [PatientController::class, 'dressingSupport'])->name('dressingSupport');
    Route::post('store-dressing-support/{id}', [PatientController::class, 'storeDressingSupport'])->name('storeDressingSupport');

    Route::get('patient/nutrition-hydration/{id}', [PatientController::class, 'nutritionHydration'])->name('nutritionHydration');
    Route::post('store-nutrition-hydration/{id}', [PatientController::class, 'storeNutritionHydration'])->name('storeNutritionHydration');

    Route::get('patient/skin-care/{id}', [PatientController::class, 'skinCare'])->name('skinCare');
    Route::post('store-skin-care/{id}', [PatientController::class, 'storeSkinCare'])->name('storeSkinCare');

    Route::get('patient/adapted-walsall-care/{id}', [PatientController::class, 'adaptedWalsallCare'])->name('adaptedWalsallCare');
    Route::post('store-adapted-walsall-care/{id}', [PatientController::class, 'storeAdaptedWalsallCare'])->name('storeAdaptedWalsallCare');

    Route::get('patient/pressure-ulcer-record-tool/{id}', [PatientController::class, 'pressureUlcerRecordTool'])->name('pressureUlcerRecordTool');
    Route::post('store-pressure-ulcer-record-tool/{id}', [PatientController::class, 'storePressureUlcerRecordTool'])->name('storePressureUlcerRecordTool');

    Route::get('patient/continence-care/{id}', [PatientController::class, 'continenceCare'])->name('continenceCare');
    Route::post('store-continence-care/{id}', [PatientController::class, 'storeContinenceCare'])->name('storeContinenceCare');

    Route::get('patient/medication/{id}', [PatientController::class, 'medication'])->name('medication');
    Route::post('store-medication/{id}', [PatientController::class, 'storeMedication'])->name('storeMedication');

    Route::get('patient/my-preferred-call-support/{id}', [PatientController::class, 'preferredCallSupport'])->name('preferredCallSupport');
    Route::post('store-my-preferred-call-support/{id}', [PatientController::class, 'storePreferredCallSupport'])->name('storePreferredCallSupport');

    Route::get('assistant', [AssistantController::class, 'index'])->name('assistant.index');
    Route::get('get-assistant-list', [AssistantController::class, 'getAssistant'])->name('getAssistant');
    Route::get('get-assistant-patient', [AssistantController::class, 'assistantPatient'])->name('assistantPatient');
    Route::get('get-assistant-patient-list', [AssistantController::class, 'getAssistantPatient'])->name('getAssistantPatientList');
});