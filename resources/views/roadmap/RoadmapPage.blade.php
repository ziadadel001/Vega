@extends('layouts.vega')

@section('Title', 'Roadmap')

@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/css/RoadmapPage.css') }}">

@endsection

@section('content')

    <div class="container" style="padding-top: 200px; ">
        <p class="text12">Our Roadmap</p>
        <p class="text11">We provide You with all courses that you need to master any track whatever your level .</p>
    </div>


    <!--Start of Roadmap-->

    <div class="container d-lg-flex gap-3 flex-wrap maps  ">
        @foreach ($roadmaps as $roadmap)
            <div class="card rounded-4 col-lg-3 col-sm-10  my-md-4 " onclick="myFunction()">
                <a href="#" class="overflow-hidden">
                    <div class="card__img">
                        <img src="{{ asset('Assets/img/png.png') }}" class="card-img-top rounded-top-4" />
                    </div>
                </a>
                <div class="container">
                    <div class="card-body pt-4 pb-2">
                        <a href="#" class="text-decoration-none text-dark">
                            <p class="card-title pb-2 text10">{{ $roadmap->name }}</p>
                        </a>
                        <p class="card-text text-muted pb-3 text11">
                            {{ $roadmap->about }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <section id="zz">
        <div class="pick">
            <button id="x" onclick="myFunction()">X </button>
            <p class="txt4">Which type or roadmap do you need</p>
            <form>
                <input type="radio" id="standard" name="roadmap" value="standard" class="text-bg-dark">
                <label for="standard" class="pb-4 txt4">Standard Roadmap</label><br>
                <input type="radio" id="custom" name="roadmap" value="custom">
                <label for="custom" class="txt4">Custom Roadmap</label><br>
            </form>
            <button id="next">Next</button>

        </div>
    </section>

    <section id="zzz">
        <div class="pick2">
            <button id="esc" onclick="myFunction()">X </button>
            <p class="txt4">select the skills do you have in Data Science</p>
            <div class="skill">
                <button class="saveButton" style="  font-weight: 600;">Sql</button>
                <button class="saveButton" style="  font-weight: 600;">Statistics</button>
                <button class="saveButton" style="  font-weight: 600;">Probability</button>
                <button class="saveButton" style="  font-weight: 600;">Data Learning</button>
                <button class="saveButton" style="  font-weight: 600;">Algorithms</button>
                <button class="saveButton" style="  font-weight: 600;">Calculs</button>
                <button class="saveButton" style="  font-weight: 600;">Python</button>
                <button class="saveButton" style="  font-weight: 600;">Git</button>
            </div>
            <p class="txt3"> <i class="fa-solid fa-clipboard icon" style="color: #ff9d14;"></i>For each chosen skill, a
                quiz
                will be conducted to determine your level to see if you need to
                learn it on your
                roadmap or not.</p>

            <div class="lock gap-sm-3">
                <button id="close1">Back</button>
                <button id="close">Go to quiz</button>

            </div>

        </div>
    </section>
    <script>
        const div1 = document.getElementById("zz");
        const div2 = document.getElementById("zzz");

        const showDiv1Button = document.getElementById("showDiv1");
        const showDiv2Button = document.getElementById("showDiv2");

        function myFunction() {
            var x = document.getElementById("zz");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        var submitButton = document.getElementById("next");

        submitButton.addEventListener("click", function() {
            var option1Checked = document.getElementById("standard").checked;
            var option2Checked = document.getElementById("custom").checked;

            if (option1Checked) {
                window.location.href = "{{ route('ShowRoadmap.create', $roadmap->id) }}";
            } else if (option2Checked) {
                div1.style.display = "none";
                div2.style.display = "block";
            } else {
                alert("Please select an option");
            }
        });

        var closeBtn = document.getElementById("close1");
        var myDiv = document.getElementById("zzz");

        closeBtn.addEventListener("click", function() {
            div2.style.display = "none";
            div1.style.display = "block";
        });

        var esc = document.getElementById("esc");
        esc.addEventListener("click", function() {
            div2.style.display = "none";
            div1.style.display = "none";
        });

        // let saveButton = document.querySelectorAll(".saveButton");
        // const dataArray = [];
        // saveButton.forEach((el) =>
        //   el.addEventListener("click", function () {
        //     dataArray.push(el.textContent);

        //     console.log(dataArray);
        //     el.style.backgroundColor = "#e98016";
        //   })
        // );

        const saveButtons = document.querySelectorAll(".saveButton");
        const dataArray = [];

        saveButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const buttonText = button.textContent;

                // Check if button text is already in the array
                const index = dataArray.indexOf(buttonText);

                if (index === -1) {
                    dataArray.push(buttonText);
                    console.log(dataArray);
                    button.style.backgroundColor = "#e98016";
                } else {
                    dataArray.splice(index, 1);
                    console.log(dataArray);
                    button.style.backgroundColor = "white";
                }
            });
        });

        var closeButton = document.getElementById("close");

        closeButton.addEventListener("click", function() {
            // Navigate to the quiz page
            window.location.href = "quiz.html";
        });

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "your_php_script.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Request was successful, do something with the response
                    console.log(xhr.responseText);
                } else {
                    // Request failed
                    console.error("Request failed: " + xhr.status);
                }
            }
        };

        xhr.send(JSON.stringify(dataArray));
    </script>

@endsection
