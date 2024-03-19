<!-- ========== Left Sidebar Start ========== -->
<style>
    .menu-text {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                @if (Auth::user()->role == 'Admin')
                <li>
                    <a href="#">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('patient.index')}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Patient</span>
                    </a>
                </li>
                @if (Str::startsWith(request()->path(), 'patient/'))
                <li>
                    <a href="{{route('personalContact', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Personal Contact Details</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myInformation', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">My Information</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('enviromentalRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Environmental Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('fireSefatyRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Fire Safety Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myHealth', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">My Health</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('covid19', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">COVID-19</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('allergies', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Allergies</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('communication', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Communication</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('myLifeStyle', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">My Lifestyle / Choices</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('mobility', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Mobility</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('mobilityTransferRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Mobility and Transfer Risk Assessment</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('fallsRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Falls Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('personalCare', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Personal Care Oral Care</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('washAndShower', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Wash and Shower</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('dressingSupport', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Dressing Support</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('skinCare', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Skin Care</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('adaptedWalsallCare', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Adapted Walsall Score Pressure Ulcer Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pressureUlcerRecordTool', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Pressure Ulcer / Skin Marks / Bruising Record Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('continenceCare', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Continence Care</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('nutritionHydration', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Nutrition and Hydration</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('dietaryRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Dietary Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('medication', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Medication</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('medicationRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Medication Risk Assessment Tool</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('restraintRisk', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Restraint Risk Assessment</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('endLife', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">End of Life</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('socialInterest', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Social Interest and Activities</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('generalTidy', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">General Tidy Up</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('extraNeed', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Extra Needs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('preferredCallSupport', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span class="menu-text" key="t-tables">My Preferred Call Time & Support Needs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('emergencyActionPlan', $patient->id)}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Emergency Action Plan</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{route('assistant.index')}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Assistant</span>
                    </a>
                </li>
                @elseif (Auth::user()->role == 'Assistant')
                <li>
                    <a href="{{route('assistantPatient')}}">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Patient</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
