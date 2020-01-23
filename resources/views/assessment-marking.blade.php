@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<div class="row" id="assessment-marking-panel">

    <div class="marking-panel bg-warning" id="marking-panel">
        <div class="score-label d-flex justify-content-end" id="score-label">
            <!-- here goes the calculated score section in the value bit -->
            <div class="mx-0 px-0 text-right">
                <input type="text" name="" value="">
            </div>
            <div class="mx-0 px-0 text-right">
                <input type="text" name="" value="score1" readonly>
            </div>
            <div class="mx-0 px-0 text-left">
                <input type="text" name="" value="score2" readonly>
            </div>
            <div class="mx-0 px-0 text-left">
                <input type="text" name="" value="score3" readonly>
            </div>
            <div class="mx-0 px-0 text-left">
                <input type="text" name="" value="score4" readonly>
            </div>
            <div class="mx-0 px-0 text-left">
                <input type="text" name="" value="score5" readonly>
            </div>
        </div>

        <div class="scroll-panel">
            <div class="accordion d-flex justify-content-end" id="accordion">
                <!-- pop each skill from DB -->
                <div class="card">

                    <div class="card-header row" id="headingOne">
                        <!-- skill trait name -->
                        <div class="d-flex justify-content-between col-3">
                            <span>skill trait name</span>
                            <div class="btn btn-link" data-toggle="collapse" data-target="#criteria&code" aria-expanded="true" aria-controls="criteria&code">
                                <img src="/images/VectorClose.png" alt="closeBTN">
                            </div>
                        </div>
                        <!-- score 1 -->
                        <div class="col-2 form-check">
                            <label for="score1" class="score-radio form-check-label"><input class="form-check-input" type="radio" id="score1" name="score1" value=""><span></span></label>
                        </div>
                        <!-- score 2 -->
                        <div class="col-2 form-check">
                            <label for="score2" class="score-radio form-check-label"><input class="form-check-input" type="radio" id="score2" name="score2" value=""><span></span></label>
                        </div>
                        <!-- score 3 -->
                        <div class="col-2 form-check">
                            <label for="score3" class="score-radio"><input type="radio" id="score3" name="score3" value=""><span></span></label>
                        </div>
                        <!-- score 4 -->
                        <div class="col-2 form-check">
                            <label for="score4" class="score-radio"><input type="radio" id="score4" name="score4" value=""><span></span></label>
                        </div>
                        <!-- score 5 -->
                        <div class="col-1 form-check">
                            <label for="score5" class="score-radio"><input type="radio" id="score5" name="score5" value=""><span></span></label>
                        </div>
                    </div>
                    <!-- score criteria + milestone codes -->

                    <div class="card-body row collapse" id="criteria&code" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="col-3">

                        </div>
                        <div class="card-text col-9 d-flex justify-content-between px-0">
                            <div class="col-3 px-0">
                                <p>dehjf</p>

                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-2">
                                <p>dehjf</p>
                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-1">
                                <p>dehjf</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="btn-panel" id="btn-panel">
        <button type="button" name="button" class="btn align-self-start" id="sidebar-collapse"><i class="fas fa-arrow-right"></i></button>
    </div>

    <div class=" mCustomScrollbar info-panel bg-info" id="info-panel">

    </div>

</div>
@endsection
