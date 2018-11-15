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
        <h2>REST API CALL</h2>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr align="center">
                        <th>Course type</th>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $curlLoop = $finalRes['secondaryArr'];
                    foreach ($curlLoop as $key=>$value) { 
                    ?>
                        <tr>
                            <td><?=$value->courseType;?></td>
                            <td><?=$value->name;?></td>
                            <td><?=$value->id;?></td>
                            <td><button type="button" data-courseid="<?=$value->id;?>" data-coursename="<?=$value->name;?>" data-coursetype="<?=$value->courseType;?>" data-toggle="modal" data-target="#showFormModal" class="saveCourse btn btn-success">Save</button></td>
                        </tr>
                    
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            
            
    </div>
    <?php
        $prev = $finalRes['prev'];
        $next = $finalRes['next'];
    ?>
    <div class="row col-lg-8">

    <?php
         if($prev != '') { 
    ?>
        <div class="col-lg-6">
            <div class="float-left">
                <a href="<?=$prev;?>" class="btn btn-info btnPrevious" >Previous</a>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-lg-6">
            
        </div>
    <?php } ?>
    <?php
         if($next != '') { 
    ?>
        <div class="col-lg-6">
            <div class="float-right">
                <a href="<?=$next;?>" class="btn btn-info btnNext" >Next</a>
            </div>  
        </div>
    <?php } else { ?>
        <div class="col-lg-6">
            
        </div>
    <?php } ?>    
    </div>
</div>
@include('layouts.footer')