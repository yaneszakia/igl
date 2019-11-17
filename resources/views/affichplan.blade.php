
<!DOCTYPE html>
<html>
<body>


{{csrf_field()}}
  
  
  votre email est  :
{{$user->email}}
votre planning est :
{{$planning->id}}
<img src="/Storage/app/public/{{ $planning->photo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

</body>
</html>


