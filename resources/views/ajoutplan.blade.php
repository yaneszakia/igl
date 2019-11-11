<!DOCTYPE html>
<html>
<body>

<h2>Text Input</h2>

<form enctype="multipart/form-data" action="{{route('addplan')}}" method="POST">
{{csrf_field()}}
  groupe<br>
  <input type="text" name="grp">
  <br>
  

<label>Télécharger une image de profile</label>
                     <div class="file-path-wrapper">
                        <input type="file" name="photo">
                    </div>
                    <button type='submit' name='submit'>ajouter</button>

</form>
</body>
</html>