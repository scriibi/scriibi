@extends('layout.mainlayout')
@section('title', 'Assessments-Marking')
@section('content')

<div class="row">
    <div class="main-panel">
        <div class="score-label bg-warning row">
            <!-- here goes the calculated score section in the value bit -->
            <div class="col-5 mx-0 px-0 text-right">
                <input type="text" name="" value="score1" readonly>
            </div>
            <div class="col-2 mx-0 px-0 text-left">
                <input type="text" name="" value="score2" readonly>
            </div>
            <div class="col-2 mx-0 px-0 text-left">
                <input type="text" name="" value="score3" readonly>
            </div>
            <div class="col-2 mx-0 px-0 text-left">
                <input type="text" name="" value="score4" readonly>
            </div>
            <div class="col-1 mx-0 px-0 text-left">
                <input type="text" name="" value="score5" readonly>
            </div>
        </div>
        <div class="scroll-panel bg-info">
            <div class="accordion">
                <!-- pop how many skills from DB -->
                <div class="card">
                    <div class="card-header row">
                        <!-- skill trait name -->
                        <div class="d-flex justify-content-between col-3">
                            <span>skill trait name</span>
                            <div class="btn">
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

                    <div class="card-body">
                        <div class="3">

                        </div>
                        <div class="card-text col-2">
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
                <div class="card">

                </div>

            </div>
        </div>
    </div>

    <div class="side-info bg-primary">
        <p class="">ff</p>
    </div>
</div>
@endsection
