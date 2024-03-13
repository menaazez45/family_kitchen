
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فديوهات طبخ</title>
    <style>
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* تحديد المسافة بين الفيديوهات */
        }
     
        .p {
            font-size: 16px;
            text-align: center;
        }
        .form {
            text-align: center;
        }
        .video{
            width:350px;
             height:200px;
        }
    </style>
</head>
<body class="body">
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- إضافة عنصر البحث -->
        <input type="search" name="search" placeholder="ابحث عن الفيديو...">
        <button type="submit">بحث</button>
        <div class="video-container">
            <div>
                <p class="p">من غير دقيق ولا سمن ولا حليب هتعملى 
                    <br>اهش كيكه وتنفع للتورتة</p>
                <video class="video" controls src="من غير دقيق ولا سمن ولا حليب هتعملى اهش كيكه وتنفع للتورتة.mp4"></video>
            </div>
            <div>
                <p class="p">لو ولادك مش بيحبوا القلقاس تعالى اقولك على طريقه جديده 
                    <br>هتخليهم يطلبوه منك كل يوم</p>
                <video controls class="video" src="لو ولادك مش بيحبوا القلقاس تعالى اقولك على طريقه جديده هتخليهم يطلبوه منك كل يوم.mp4"></video>
            </div>
            <div>
                <p class="p">طريقه عمل الاسباكيتى  لذيذه جدا 
                    <br>لو جربتوها هتدمنوها</p>
                <video  class="video" controls src="طريقه عمل الاسباكيتى  لذيذه جدا لو جربتوها هتدمنوها.mp4"></video>
            </div>
            <div>
                <p class="p">لو ولادك مش بيحبوا القلقاس تعالى اقولك على طريقه جديده 
                    <br>هتخليهم يطلبوه منك كل يوم</p>
                <video  class="video" controls src="لو ولادك مش بيحبوا القلقاس تعالى اقولك على طريقه جديده هتخليهم يطلبوه منك كل يوم.mp4"></video>
            </div>
            <div>
                <p class="p">ليه تشتريه من بره لما ممكن تعمليه فى البيت باسهل طريقه <br>والطعم حكايه المخلل اللفت والمشكل</p>
                <video class="video" controls src="ليه تشتريه من بره لما ممكن تعمليه فى البيت باسهل طريقه والطعم حكايه المخلل اللفت والمشكل.mp4"></video>

            </div>
            <div>
                <p class="p">طريقه عمل كفته الفراخ بطريقه الحاتى<br> والطعم خطييير</p>
                <video controls class="video" src="طريقه عمل كفته الفراخ بطريقه الحاتى والطعم خطييير.mp4"></video>
            </div>
        </div>
    </form>
</body>
</html>
