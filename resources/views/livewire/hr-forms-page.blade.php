<div class="hrformspage_container">
    <div class="hrforms-banner">
        <img id="hrforms_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="hrforms-h1">Human Resources Forms</h1>
    </div>
    <div class="column">
        <div class="option">
            <a href="{{ asset('documents/Personal-Data-Sheet-File.pdf') }}" class="button" target="_blank">Fill up Personal Data Sheet (PDS)</a>
        </div>

        <div class="option">
        <a href="{{ asset('documents/SALN-FORM.pdf') }}" class="button" target="_blank">Fill up Statement of Assets, Liabilities and Net Worth (SALN)</a>
        </div>

        <div class="option">
            <a href="{{ asset('documents/Leave-Form.pdf') }}" class="button" target="_blank">Fill up Leave Form</a>
        </div>

        <div class="option">
            <a href="{{ asset('documents/Permit-To-Teach-Form.pdf') }}" class="button" target="_blank">Fill up Permit to Teach</a>
        </div>

        <div class="option">
            <a href="{{ asset('documents/Permit-To-Study-Form.pdf') }}" class="button" target="_blank">Fill up Permit to Study</a>
        </div>

        <div class="option">
            <a href="{{ asset('documents/Request-For-Change-Work-Schedule.pdf') }}" class="button" target="_blank">Fill up Change in Work Schedule</a>
        </div>

        <div class="option">
            <a href="{{ asset('documents/Permit-To-Engage-Private-Practice.pdf') }}" class="button" target="_blank">Fill up Engage in Private Practice</a>
        </div>

    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hrformspage.css') }}">
@endpush
