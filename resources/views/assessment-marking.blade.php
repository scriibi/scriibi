@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<div class="row" id="assessment-marking-panel">

    <div class="marking-panel mx-0 px-0 mt-2" id="marking-panel">
        <div class="score-label px-0 mx-0" id="score-label">
            <!-- here goes the calculated score section in the value bit -->
            <div>
                <input type="text" name="" value="" class="w-100 text-center lable-input">
            </div>
            <div>
                <input type="text" name="" value="score1" class="w-100 text-center lable-input" readonly>
            </div>
            <div >
                <input type="text" name="" value="score2" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="score3" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="score4" class="w-100 text-center lable-input" readonly>
            </div>
            <div class="text-center">
                <input type="text" name="" value="score5"  class="w-100 text-center lable-input" readonly>
            </div>
        </div>
        <div class="scroll-panel mx-0 px-0">

            <!-- pop each skill from DB -->
            <div class="card px-0 mx-0 mb-1 border-0">
                <div class="card-body p-0">
                    <div class="card-title score-items mb-0 radioBTNs-section">
                        <div class="w-100 text-center  d-flex justify-content-around">
                            <span class="align-self-center">skill trait name</span>
                            <a class="btn btn-link align-self-center" href="#criteria" data-toggle="collapse">
                                <img src="/images/VectorClose.png" alt="closeBTN">
                            </a>
                        </div>

                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0 ">
                                <input class="m-0 p-0" type="radio" id="score1" name="score" value="score1"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <input class="" type="radio" id="" name="score" value="score2"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <input class="" type="radio" id="" name="score" value="score3"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <input class="" type="radio" id="" name="score" value="score4"><span></span>
                            </label>
                        </div>
                        <div class="w-100 text-center align-self-center">
                            <label class="score-radio m-0 p-0">
                                <input class="" type="radio" id="" name="score" value="score5"><span></span>
                            </label>
                        </div>
                    </div>

                    <div class="card-text score-items collapse show criteria-section" id="criteria">
                        <div class="">

                        </div>

                        <div class="">
                            <p>Here is the criteria
                             </p>
                            <p class="milestone">VCEAL20548, ACLE25487</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="">
                            <p>Here is the criteria
                            </p>
                            <p class="milestone">VCEAL6844</p>

                        </div>
                        <div class="">

                        </div>
                        <div class="">
                            <p>Here is the criteria

                            </p>
                            <p class="milestone">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of each skill card -->
        </div>
    </div>
    <div class="btn-panel" id="btn-panel">
        <button type="button" name="button" class="btn align-self-start" id="sidebar-collapse"><i class="fas fa-arrow-right"></i></button>
    </div>
    <!-- sidebar with assessment info -->
    <div class="info-panel d-block justify-content-end" id="info-panel">

        <input class="mt-1"type="text" name="" value="Status" readonly>
        <input class="mt-2"type="text" name="" value="Full Name" readonly>
        <input class="mt-3"type="text" name="" value="Assessed Level" readonly>

        <textarea class="mt-5 px-1 mx-2"name="name" rows="8" cols="80" placeholder="Comments/Notes"></textarea>
        <div class="">
            <button class="btn"type="button" name="button">Level Example</button>
        </div>
        <div class="">
            <button class="btn"type="button" name="button">Save Marking</button>
        </div>
        </div>


</div>
@endsection
