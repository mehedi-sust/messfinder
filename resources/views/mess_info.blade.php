<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         
         @foreach ($users as $user)
            <label> ID:</label>{{ $user->mess_id }}<br>
            <label>Mess Name:</label>{{ $user->mess_name }}
         @endforeach
      </table>
   
   </body>
</html>