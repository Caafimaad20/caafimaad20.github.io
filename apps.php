﻿<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
   <meta name="Description" content="الشروق للبرمجيات هو موقع متخصص في الإنتاج التطبيقات السطح المكتب والتطبيقات الشبكات والتطبيقات الويب والتطبيقات الموبايل والتطبيقات التطبيقات السحابية والمواقع الإلكترونية المحترفة بالإضافة الى الدورات العلمية البرمجة والقواعد البيانات ">
  <meta name="Keywords" content=
"البرمجة التطبيقات السطح المكتب,البرمجة التطبيقات الشبكات,البرمجة التطبيقات الويب,البرمجة التطبيقات الموبايل,البرمجة التطبيقات السحابية, البرمجة المواقع الإلكترونية,التدريس الدورات البرمجة,التدريس الدورات القواعد البيانات">
  <meta name="author" content="ابرهيم سعيد عبدالله ibrahim siciid cabdilaahi jamac (Caafimaad Barmajo)">
    <title> الشروق للبرمجيات</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
          box-sizing: border-box;
        }
        
        #myInput {
          background-image: url('/css/searchicon.png');
          background-position: 10px 10px;
          background-repeat: no-repeat;
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }
        
        #myTable {
          border-collapse: collapse;
          width: 100%;
          border: 1px solid #ddd;
        
          font-size: 18px;
        }
        
        #myTable th, #myTable td {
          text-align: right;
          padding: 12px;
        }
        
        #myTable tr {
          border-bottom: 1px solid #ddd;
        }
        
        #myTable tr.header, #myTable tr:hover {
          background-color: #f1f1f1;
        }
        
        th {
          background-color: #4CAF50;
          color: white;
        }
        
        
        
        #customers tr:hover {background-color: #ddd;}
        
        input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: none;
          background-color: #3CBC8D;
          color: white;
        }
        
        input[type=text] {
          background-color: #ffa500;
          color: white;
        text-align: center;
        
          border-radius: 10px;
        }
        
        tr:nth-child(even) {
          background-color: #FFFACD
        }
        
        
        
        </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default custom-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle btn custom-btn collapsed" data-toggle="collapse" data-target="#navbar-collapsed-menu">
                            <i class="fa fa-bars fa-lg"></i>
                        </button>
                         <div >
                 <h2><a href="index.php"    class="navbar-nav"  class="navbar navbar-light bg-light" style="padding:40px;text-decoration: none;" style="font-size:1px;">  الشروق للبرمجيات</a></h2>
                     </div>
                    </div>
                    <div id="navbar-collapsed-menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="index.php">الصفحة الرئيسية</a>
                            </li>
                            <li >
                                <a href="about.php">المطور</a>
                            </li>
                            <li >
                                <a href="projects.php">المنتجات</a>
                            </li>
                            <!--<li>
                                <a href="blog.php">الدورات</a>
                            </li>
                            <li>
                                <a href="contact.php">البريد</a>
                            </li>-->
                            <li>
                                <a href="home.php">الوجهة الإنجليزية</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div id="banner" class="container-fluid col-xs-12 ">
                <div id="banner-img" style="background-image:url(images/banner-project.jpg">
                    <div class="overlay">
                        <h1 class="title1">عن التطبيقات </h1>
                    </div>
                </div>
            </div>
        </div>

        
 <div class="text-center">
                        <h2 > الجميع التطبيقات</h2>
                    </div>

        </div>
<div class="row">
            <div class="container-fluid">
                <div class="col-md-12">
                    
                 
   <div class="text-center">
<!---
   <input type="text" id="myInput" onkeyup="myFunction()"   placeholder="أكتب اسم التطبيق...." title="Type in a name"> 
-->
     
<input type="text" id="myInput" list="mylist" onkeyup="myFunction()" placeholder="أكتب اسم التطبيق...." title="Type in a name"> 
<datalist id="mylist">
 <option>نظام الإدارة المدرسة التمهيدية المتكامل<option>
   <option>نظام الإدارة المدارس التمهيدية المتكامل<option>

 <option>نظام الإدارة المدرسة الإبتدائية المتكامل<option>
   <option>نظام الإدارة المدارس الإبتدائية المتكامل<option>

 <option>نظام الإدارة المدرسة الإعدادية المتكامل<option>
   <option>نظام الإدارة المدارس الإعدادية المتكامل<option>

 <option>نظام الإدارة المدرسة الثانوية المتكامل<option>
   <option>نظام الإدارة المدارس الثانوية المتكامل<option>

 <option>نظام الإدارة المدرسة التمهيدية والإبتدائية المتكامل</option>
 <option>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</option>

 <option>نظام الإدارة المدرسة الإبتدائية والإعدادية المتكامل</option>
 <option>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</option>

 <option>نظام الإدارة المدرسة الإعدادية والثانوية المتكامل</option>
 <option>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</option>

 <option>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية المتكامل</option>
 <option>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</option>

 <option>نظام الإدارة المدرسة الإبتدائية والإعدادية والثانوية المتكامل</option>
 <option>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</option>

 <option>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</option>
 <option>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</option>

 <option>نظام الإدارة المعهد المتكامل</option>
 <option>نظام الإدارة المعاهد المتكامل</option>

 <option>نظام الإدارة الجامعة المتكامل</option>
 <option>نظام الإدارة الجامعة المتكامل</option>

 <option>نظام الإدارة المستودعات المتكامل</option>

 <option>التصميم</option>
 
 </datalist>
    

<div style="overflow-x:auto;">
<table id="myTable" Border="1" id="customers"  style="font-family:Jomhuria;font-size:100%;">
  <tr class="header">
   <th style="width:3%;">م</th>
    <th style="width:28%;">اسم التطبيق العربي</th>
     <th style="width:40%;">اسم التطبيق الإنجليزي</th>
    <th style="width:14%;">نوع التطبيق</th>
    <th style="width:10%;">المنظمة</th>
<th style="width:5%;">جرب</th>
  </tr>
<tr>
    <td>001</td>
    <td>نظام الإدارة المدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>002</td>
    <td>نظام الإدارة المدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>003</td>
    <td>نظام الإدارة المدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>004</td>
    <td>نظام الإدارة المدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>005</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>006</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>007</td>
    <td>نظام الإدارة المدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>008</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>009</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>010</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


 <tr>
    <td>011</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>012</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University School System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>013</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>014</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>015</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>016</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>017</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>018</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>019</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>020</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>021</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>022</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>023</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes Schools System</td>
 
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>024</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities Schools System</td>
    <td>التطبيقات السطح المكتب</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>025</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated Warehouse System</td>
    <td>التطبيقات السطح المكتب</td>
    <td>المؤسسة التجارية</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>026</td>
    <td>نظام الإدارة المدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>027</td>
    <td>نظام الإدارة المدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>028</td>
    <td>نظام الإدارة المدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>029</td>
    <td>نظام الإدارة المدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>030</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>031</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>032</td>
    <td>نظام الإدارة المدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>033</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>034</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>035</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


 <tr>
    <td>036</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>037</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University School System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>038</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>039</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>040</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>041</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>042</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>043</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>044</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>045</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>046</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>047</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>048</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes Schools System</td>
 
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>049</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities Schools System</td>
    <td>التطبيقات الشبكات</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>050</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated Warehouse System</td>
    <td>التطبيقات الشبكات</td>
    <td>المؤسسة التجارية</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>



  <tr>
    <td>051</td>
    <td>نظام الإدارة المدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>052</td>
    <td>نظام الإدارة المدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>053</td>
    <td>نظام الإدارة المدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>054</td>
    <td>نظام الإدارة المدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>055</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>056</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>057</td>
    <td>نظام الإدارة المدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>058</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>059</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>060</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


 <tr>
    <td>061</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>062</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University School System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>063</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>064</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>065</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>066</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>067</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>068</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>069</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>070</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>071</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>072</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>073</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>074</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities Schools System</td>
 
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>



  </tr>
  <tr>
    <td>075</td>
    <td>نظام الإدارة المدرسة التمهيدية المتكامل</td>
    <td>Integrated kg School System</td>
    
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>076</td>
    <td>نظام الإدارة المدرسة الإبتدائية المتكامل</td>
    <td>Integrated Primary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>077</td>
    <td>نظام الإدارة المدرسة الإعدادية المتكامل</td>
    <td>Integrated Preparatory School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>078</td>
    <td>نظام الإدارة المدرسة الثانوية المتكامل</td>
    <td>Integrated Secondary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>079</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>080</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>081</td>
    <td>نظام الإدارة المدرسة الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>082</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>083</td>
    <td>نظام الإدارة المدرسة الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>084</td>
    <td>نظام الإدارة المدرسة التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


 <tr>
    <td>085</td>
    <td>نظام الإدارة المعهد المتكامل</td>
    <td>Integrated Institute School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>086</td>
    <td>نظام الإدارة الجامعة المتكامل</td>
    <td>Integrated University School System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>المدرسة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>087</td>
    <td>نظام الإدارة المدارس التمهيدية المتكامل</td>
    <td>Integrated kg Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>088</td>
    <td>نظام الإدارة المدارس الإبتدائية المتكامل</td>
    <td>Integrated Primary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>089</td>
    <td>نظام الإدارة المدارس الإعدادية المتكامل</td>
    <td>Integrated Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
  <td>090</td>
    <td>نظام الإدارة المدارس الثانوية المتكامل</td>
    <td>Integrated Secondary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
   <td>091</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية المتكامل</td>
    <td>Integrated kg And Primary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>092</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية المتكامل</td>
    <td>Integrated Primary And Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>


<tr>
   <td>093</td>
    <td>نظام الإدارة المدارس الإعدادية والثانوية المتكامل</td>
    <td>Integrated Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>094</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>095</td>
    <td>نظام الإدارة المدارس الإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>096</td>
    <td>نظام الإدارة المدارس التمهيدية والإبتدائية والإعدادية والثانوية المتكامل</td>
    <td>Integrated kg And Primary And Preparatory And Secondary Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>097</td>
    <td>نظام الإدارة المعاهد المتكامل</td>
    <td>Integrated Institutes Schools System</td>
 
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  <tr>
    <td>098</td>
    <td>نظام الإدارة الجامعات المتكامل</td>
    <td>Integrated Universities Schools System</td>
    <td>التطبيقات الشبكات السحابية</td>
    <td>الوزارة</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>099</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated ًWarehouse System</td>
    <td>التطبيقات السطح المكتب السحابية</td>
    <td>المؤسسة التجارية</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

 <tr>
    <td>100</td>
    <td>نظام الإدارة المستودعات المتكامل</td>
    <td>Integrated ًWarehouse System</td>
    <td>التطبيقات الشبكات السحابية</td>
    <td>المؤسسة التجارية</td>
   <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
 <tr>
    <td>101</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>102</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>103</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>104</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>105</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>106</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>107</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>108</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>109</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>110</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>111</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>112</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>113</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>114</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>115</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>116</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>117</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>118</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>119</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>120</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>121</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>122</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>123</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>124</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>125</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>126</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>127</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>128</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>129</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>130</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>131</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>132</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>133</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>134</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>135</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>136</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>137</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>138</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>139</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>140</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>141</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>142</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>143</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>144</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>145</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>146</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>147</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>148</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>149</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>150</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>151</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>152</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>153</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>154</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>155</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>156</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>157</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>158</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>159</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>160</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>161</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>162</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>163</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>164</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>165</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>166</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>167</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>168</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>169</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>170</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>171</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>172</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>173</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>174</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>175</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>176</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>177</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>178</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>179</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>180</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>181</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>182</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>183</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>184</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>185</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>186</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>187</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>188</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>189</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>190</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>191</td>
    <td>التصميم </td>
    <td>Template01</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
  
  <tr>
    <td>192</td>
    <td>التصميم </td>
    <td>Template02</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

  <tr>
    <td>193</td>
    <td>التصميم </td>
    <td>Template03</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>194</td>
    <td>التصميم </td>
    <td>Template04</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>195</td>
    <td>التصميم </td>
    <td>Template05</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

<tr>
    <td>196</td>
    <td>التصميم </td>
    <td>Template06</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>197</td>
    <td>التصميم </td>
    <td>Template07</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>198</td>
    <td>التصميم </td>
    <td>Template08</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>199</td>
    <td>التصميم </td>
    <td>Template09</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>
<tr>
    <td>200</td>
    <td>التصميم </td>
    <td>Template10</td>
    <td>الموقع الإلكتروني الجاهز</td>
    <td>أي المؤسسة</td>
    <td><a href="index.php" target="_blank">جرب</a></td>
  </tr>

</table>


   </div>
     <br>
                          <h4  style="color:blue;font-family:Jomhuria";>
من فضلك لا تتردد لكي تتواصل معنا                                                                           
<br>
  
                        </h4>
       <a href="about.php" class="btn btn-default custom-btn-main">

           تتواصل معنا

       </a>
  </div>
        <br>


         <div id="footer" class="row">
            <div class="container-fluid">
                <div class="col-xs-12 text-center">
                    <h2>
                        الشروق للبرمجيات
                    </h2>
                    <hr style="width:5%;border-top:3px solid #EEE;">
                </div>
                <div id="footer-nav-links" class="col-xs-12 text-center">
                    <a href="index.php">الصفحة الرئيسية</a>
                    <a href="about.php">المطور</a>
                    <a href="projects.php">المنتجات </a>
                    <!--<a href="blog.php">الدورات</a>
                    <a href="contact.php">البريد</a>-->
                    <a href="home.php">الواجهة الإنجليزية</a>
                </div>
                <hr>
                <div class="col-xs-12 text-center">
                    <h5>جميع الحقوق محفوظة 2016 &copy; </h5>
                </div>
            </div>
        </div>
   </div>

   <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
