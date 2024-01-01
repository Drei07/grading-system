@if(session('student_data'))
    {{-- Access student data --}}
    @php
        $student = session('student_data');
    @endphp
@endif
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('header')
    <title>Grade Viewer | Result</title>
</head>
<body>
<!-- Loader -->
<div class="loader"></div>

    <div class="result">
        <div class="label-container">
            <label for="midterm_grade" class="label" id="midterm_grade"><i class="fa-solid fa-chart-line"></i> MTG = {{ $student->midterm_grade }}</label>
            <label for="finalterm_grade" class="label hidden" id="finalterm_grade"><i class="fa-solid fa-chart-line"></i> FTG = {{ $student->finalterm_grade }}</label>
            <label for="final_grade" class="label hidden" id="final_grade"><i class="fa-solid fa-chart-line"></i> FG = {{ $student->final_grade }}</label>

            <div class="keys">Student Number: <strong>{{ $student->student_number }}</strong></div>

        </div>


        <div id="previousBtn" class="button" onclick="previousLabel()"><i class="fa-solid fa-chevron-left"></i></div>
        <div id="nextBtn" class="button" onclick="nextLabel()"><i class="fa-solid fa-chevron-right"></i></div>
    </div>


    <script>
        var labels = document.querySelectorAll('.label');
        var currentIndex = 0;

        function showLabel(index) {
            labels[currentIndex].classList.add('hidden');
            currentIndex = (index + labels.length) % labels.length;
            labels[currentIndex].classList.remove('hidden');
        }

        function previousLabel() {
            showLabel(currentIndex - 1);
        }

        function nextLabel() {
            showLabel(currentIndex + 1);
        }
    </script>
</body>

</html>
