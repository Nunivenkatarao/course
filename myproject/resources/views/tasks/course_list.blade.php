<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@include('layouts.header')

<div class="row justify-content-center align-items-center">
    <div class="col-lg-8">
        <h2>Saved Courses</h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr align="center">
                        <th>Course type</th>
                        <th>Name</th>
                        <th>Id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($finalRes as $key=>$value) { 
                    ?>
                        <tr>
                            <td><?=$value->coursetype;?></td>
                            <td><?=$value->name;?></td>
                            <td><?=$value->course_id;?></td>
                        </tr>
                    
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        <div class="c-paginate row justify-content-center align-items-center"> 
            {{$finalRes->links()}}
        </div>   
    </div>
    
        
    </div>
</div>
@include('layouts.footer')