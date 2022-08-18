<html>
   <body>
         {{ Form::open(array('url' => '/uploadfile','files'=>'true')) }}  
         Select the file to upload.
         {{ Form::file('image') }}  
         {{ Form::submit('Upload File') }}  
         {{ Form::close() }}  
   </body>
</html>