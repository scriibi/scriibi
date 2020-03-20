<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Goal Sheets</title>
</head>
<body>
    @foreach($arr as $gs)
        <p></p>
        <p><b>Student Name:</b>{{" " . $gs["student_name"]}}<p>
        <p></p>
        <p><b>Skill Name:</b> {{" " . $gs["skill_name"]}}<p>
        <p></p>
        <p><b>Student Definition:</b> <?php echo(" " . $gs["student_definiton"]) ?> <p>
        <p></p>
        <p><b>Strategy:</b></p>
        <?php echo($gs["strategy"]) ?>
    @endforeach
</body>
</html>