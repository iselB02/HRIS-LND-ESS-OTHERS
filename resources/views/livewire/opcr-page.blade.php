<div class="opcr-container">
    <div class="opcr-banner">
        <img id="opcr_img" src="{{ asset('images/plm_bg.jpg') }}" alt="plm">
        <h1 id="opcr-h1">Office Performance Commitment and Review</h1>
    </div>
    <div class="opcr-main">
        <div id="opcr-col1">
            <h2>Attach OPCR File</h2>
            <img id="fileattach-icon" src="{{ asset('images/attach-file.png') }}" alt="plm">
            <label ><input type="file"></label>
        </div>
        <div id="opcr-col2">
            <h2>Encode OPCR Targets</h2>
            <table>
                <tbody>
                    <tr>
                        <td><h3>Distribution/dissemination and discussion of syllabus with the students by the end of the first week of classes</h3></td>
                        <td><h3>100% distribution/
                            dissemination and discussion of the syllabus with the students by the end of the first week of classes in all assigned subjects.</h3></td>
                    </tr>
                    <tr>
                        <td><h3>Application of various teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                        <td><h3>50% application of the identified teaching methods/style relevant in teaching the assigned subject based on the OBTL Plan.</h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="opcr-col3">
            <h2>Encode OPCR ratings</h2>
            <table>
                <tbody>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                </tbody>
            </table>
            <div class="average">
                <label >Average: <input type="text"></label>
            </div>
            <div><button type="submit">Submit</button></div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/opcrpage.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/opcrpage.js') }}" defer></script>
@endpush
