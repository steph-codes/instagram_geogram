
<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="text" placeholder="type name..">
            <button type="submit">SUBMIT</button>
            <br/>
            <!-- the json response is stored in data +{..} is the instagram posts of users, we need to loop over to access our items -->
            <!-- pick out image and access the url, and resolution -->
            if(!empty($instagram_array)){
            foreach($instagram_array ['data'] as $image){
                echo '<img src="'.$image['images']['low_resolution']['url'].'" alt="" />';

            }
            };
        </form>
        <script src="" async defer></script>
    </body>

    

</html>
