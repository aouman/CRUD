
        <!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/produits" method="post">
{{csrf_field()}}
  titre:<br>
  <input type="text" name="title" id="produitTitle" value="Mickey">
  <br>
  Description : <br>
  <input type="text" name="description" id="produitDescription" value="Mouse">
  <br><br>
  @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif
  <input type="submit" value="Submit">
</form> 


</body>
</html>

        
