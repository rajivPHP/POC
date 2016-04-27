<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php

?>
<div class="container">
<div class="row header" style="text-align:center;color:green">
<h3>Bootstrap popups (Responsive)</h3>
</div>
<div class="row header" style="text-align:center;margin-top:40px;">
 <a href="#" data-toggle="modal" 
 data-target="#PostCommentsModal">Post Comments</a></br></br>
  <a href="#" data-toggle="modal" data-target="#LoginModal">Login</a>
</div>
<div class="modal fade" id="PostCommentsModal" tabindex="-1" 
role="dialog" aria-labelledby="helpModalLabel"     aria-hidden="true">
            <div class="modal-dialog">      
         <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" 
                        data-dismiss="modal">
                            <span aria-hidden="true">&times;
                            </span><span class="sr-only">
Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            Post Comment</h4>
                    </div>
   <div class="modal-body">
                       <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" 
            placeholder="Your Name" />
        </div>
        <p>
        </p>
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" 
            placeholder="Your Email" />
        </div>
        <p>
        </p>
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <textarea rows="4" cols="50" 
            class="form-control" placeholder="Your Message">
</textarea>
        </div>
        <p>
        </p>
        <button type="button" class="btn-primary">
            Send</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" 
                        class="btn btn-default" data-dismiss="modal">
                            Close</button>
                    </div>
                </div>
            </div>
        </div>

//
//This is the code for the Login popup
//
<div class="modal fade" id="LoginModal" tabindex="-1" 
role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;
                            </span><span class="sr-only">
                                     Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            Login</h4>
                    </div>
                    <div class="modal-body">
                       <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" placeholder="Email" />
        </div>
        <p>
        </p>
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" placeholder="Password" />
        </div>
        <p>
        </p>  
    <button type="button" class="btn-primary">
            SignIn</button>
<button type="button" class="btn-primary">
            SignUp</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" 
                        class="btn btn-default" data-dismiss="modal">
                            Close</button>
                    </div>
                </div
            </div>
        </div>