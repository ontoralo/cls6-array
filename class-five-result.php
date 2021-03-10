<?php
$classFive=[
[
	'name' 		=>	'Sumon',
	'roll'		=>	'01',
	'id' 		=>	'200201',
	'gender' 	=>	'Male',
	'phone' 	=>	'01928485072',
	'result' 	=>	['80','50','80','85','75','65'],

],
[
	'name' 		=>	'Rifat',
	'roll'		=>	'02',
	'id' 		=>	'200202',
	'gender' 	=>	'Male',
	'phone' 	=>	'01928485075',
	'result' 	=>	['81','62','74','55','47','78'],

],
[
	'name' 		=>	'Habib',
	'roll'		=>	'03',
	'id' 		=>	'200203',
	'gender' 	=>	'Male',
	'phone' 	=>	'01928485073',
	'result' 	=>	['90','83','75','61','54','52'],

],
[	
	'name' 		=>	'Mithila',
	'roll'		=>	'04',
	'id' 		=>	'200204',
	'gender' 	=>	'Female',
	'phone' 	=>	'01928485076',
	'result' 	=>	['61','55','80','78','85','60']
]
];

foreach ($classFive as $students) {
	
	echo "Name =". " ". $students['name']."<br>";
	echo "Roll =". " ". $students['roll']."<br>";
	echo "ID =". " ". $students['id']."<br>";
	echo "Gender =". " ". $students['gender']."<br>";
	echo "Phone =". " ". $students['phone']."<br>";
	echo "Result:". "<br>";
	
	
if($students['result'][0]>=33 && $students['result'][0]<=40 ){
echo "Bangla = GPA : 1 with Grade : D". "<br>";
}elseif ($students['result'][0]>=40 && $students['result'][0]<=50){
echo "Bangla = GPA : 2 with Grade : C". "<br>";
}elseif ($students['result'][0]>=50 && $students['result'][0]<=60){
echo "Bangla = GPA : 3 with Grade : B". "<br>";
}elseif ($students['result'][0]>=60 && $students['result'][0]<=70){
echo "Bangla = GPA : 3.5 with Grade : A-". "<br>";
}elseif ($students['result'][0]>=70 && $students['result'][0]<=79){
echo "Bangla = GPA : 4 with Grade : A". "<br>";
}elseif ($students['result'][0]>=80){
echo "Bangla = GPA : 5 with Grade : A+". "<br>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}


if($students['result'][1]>=33 && $students['result'][1]<=40 ){
echo "English = GPA : 1 with Grade : D". "<br>";
}elseif ($students['result'][1]>=40 && $students['result'][1]<=50){
echo "English = GPA : 2 with Grade : C". "<br>";
}elseif ($students['result'][1]>=50 && $students['result'][1]<=60){
echo "English = GPA : 3 with Grade : B". "<br>";
}elseif ($students['result'][1]>=60 && $students['result'][1]<=70){
echo "English = GPA : 3.5 with Grade : A-". "<br>";
}elseif ($students['result'][1]>=70 && $students['result'][1]<=79){
echo "English = GPA : 4 with Grade : A". "<br>";
}elseif ($students['result'][1]>=80){
echo "English = GPA : 5 with Grade : A+". "<br>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}

if($students['result'][2]>=33 && $students['result'][2]<=40 ){
echo "Maths = GPA : 1 with Grade : D". "<br>";
}elseif ($students['result'][2]>=40 && $students['result'][2]<=50){
echo "Maths = GPA : 2 with Grade : C". "<br>";
}elseif ($students['result'][2]>=50 && $students['result'][2]<=60){
echo "Maths = GPA : 3 with Grade : B". "<br>";
}elseif ($students['result'][2]>=60 && $students['result'][2]<=70){
echo "Maths = GPA : 3.5 with Grade : A-". "<br>";
}elseif ($students['result'][2]>=70 && $students['result'][2]<=79){
echo "Maths = GPA : 4 with Grade : A". "<br>";
}elseif ($students['result'][2]>=80){
echo "Maths = GPA : 5 with Grade : A+". "<br>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}


if($students['result'][3]>=33 && $students['result'][3]<=40 ){
echo "Science = GPA : 1 with Grade : D". "<br>";
}elseif ($students['result'][3]>=40 && $students['result'][3]<=50){
echo "Science = GPA : 2 with Grade : C". "<br>";
}elseif ($students['result'][3]>=50 && $students['result'][3]<=60){
echo "Science = GPA : 3 with Grade : B". "<br>";
}elseif ($students['result'][3]>=60 && $students['result'][3]<=70){
echo "Science = GPA : 3.5 with Grade : A-". "<br>";
}elseif ($students['result'][3]>=70 && $students['result'][3]<=79){
echo "Science = GPA : 4 with Grade : A". "<br>";
}elseif ($students['result'][3]>=80){
echo "Science = GPA : 5 with Grade : A+". "<br>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}

if($students['result'][4]>=33 && $students['result'][4]<=40 ){
echo "So-Science = GPA : 1 with Grade : D". "<br>";
}elseif ($students['result'][4]>=40 && $students['result'][4]<=50){
echo "So-Science = GPA : 2 with Grade : C". "<br>";
}elseif ($students['result'][4]>=50 && $students['result'][4]<=60){
echo "So-Science = GPA : 3 with Grade : B". "<br>";
}elseif ($students['result'][4]>=60 && $students['result'][4]<=70){
echo "So-Science = GPA : 3.5 with Grade : A-". "<br>";
}elseif ($students['result'][4]>=70 && $students['result'][4]<=79){
echo "So-Science = GPA : 4 with Grade : A". "<br>";
}elseif ($students['result'][4]>=80){
echo "So-Science = GPA : 5 with Grade : A+". "<br>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}


if($students['result'][5]>=33 && $students['result'][5]<=40 ){
echo "Religion = GPA : 1 with Grade : D". "<br>". "<hr>";
}elseif ($students['result'][5]>=40 && $students['result'][5]<=50){
echo "Religion = GPA : 2 with Grade : C". "<br>". "<hr>";
}elseif ($students['result'][5]>=50 && $students['result'][5]<=60){
echo "Religion = GPA : 3 with Grade : B". "<br>". "<hr>";
}elseif ($students['result'][5]>=60 && $students['result'][5]<=70){
echo "Religion = GPA : 3.5 with Grade : A-". "<br>". "<hr>";
}elseif ($students['result'][5]>=70 && $students['result'][5]<=79){
echo "Religion = GPA : 4 with Grade : A". "<br>". "<hr>";
}elseif ($students['result'][5]>=80){
echo "Religion = GPA : 5 with Grade : A+". "<br>". "<hr>";
}else{
echo "Sorry for this time please try hard for next.." . "<br>". "<hr>";
}

$totalMarks=$students['result'];
$marks=array_sum($totalMarks)/6;

if($marks>=33 && $marks<=40 ){
echo "Final Grade Point = D and GPA 1". "<hr>";
}elseif ($marks>=40 && $marks<=50){
echo "Final Grade Point = C and GPA 2". "<hr>";
}elseif ($marks>=50 && $marks<=60){
echo "Final Grade Point = B and GPA 3". "<hr>";
}elseif ($marks>=60 && $marks<=70){
echo "Final Grade Point = A- and GPA 3.5". "<hr>";
}elseif ($marks>=70 && $marks<=79){
echo "Final Grade Point = A and GPA 4". "<hr>";
}elseif ($marks>=80){
echo "Final Grade Point = A+ and GPA 5". "<hr>";
}else{
echo "Sorry for this time please try hard for next..";
}




}




?>