<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<html>
    <head>
            <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('/css/bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
            <meta name="_token" content="{{csrf_token()}}" />
            <script src="{{ asset('/css/buttons.bootstrap4.min.css') }}"></script>    
            
            
            <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>    
            <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>   
            <script src="{{ asset('/js/bootstrap4.min.js') }}"></script>     
            <script src="{{ asset('/js/buttons.bootstrap4.min.js') }}"></script>    
            <script src="{{ asset('/js/buttons.html5.min.js') }}"></script>    
            <script src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>    
            <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>    

            <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css">   
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="btn btn-dark nav-link" href="{{ url('task/100') }}" role="button">REST API</a>
              </li> &nbsp; &nbsp; &nbsp;
              <li class="nav-item">
               <a class="btn btn-dark nav-link" href="{{ url('course-list') }}" role="button">Courses</a>
              </li>
            </ul>

          </nav>