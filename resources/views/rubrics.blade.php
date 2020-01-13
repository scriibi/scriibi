@extends('layout.mainlayout')
@section('title', 'Rubrics')
@section('content')


   <div class="content">
     <div class="content-container">
       <div class="content-container_grid_3">
        Leftmost---rubrics
       </div>
       <div class="grid_middle">
         <p id="RubricBuilder_title">RubricBuilder</p>
         <div class="card">
           <div class="card-body">
             <p>Step 1.Choose Rubric Option</p>
             <form class="form-row" action="#" method="post">
               <div class="card">
                 <div class="card card-title">

                 </div>

               </div>
               <button type="button" name="T12">
                 <p>Create Rubrics</p>
                 <p>T1 & T2</p>
               </button>
               <button type="button" name="T34">
                 <p>Create Rubrics</p>
                 <p>T3 & T4</p>
               </button>
               <button type="button" name="next">next</button>

             </form>
           </div>
         </div>
       </div>

       <div class="content-container_grid_3">
        Rightmost
       </div>
    </div>








  </div>
@endsection
