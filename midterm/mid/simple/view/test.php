
<?php
    //$query = "SELECT engWord FROM words";
    //$result = mysqli_query($connection, $query);
    
    // while($row = mysqli_fetch_assoc($result)){
        $quizz = [
            [
                'title' => 'table',
                'options' => [
                    'მაგიდა',
                    'სკამი'
                ],
                'correct_option'=>0
            ],
        [
            'title' => 'sky',
            'options' => [
                'ცა',
                'მზე'
            ],
            'correct_option'=>0
        ],
        [
            'title' => 'spoon',
            'options' => [
                'ზღვა',
                'კოვზი'
            ],
            'correct_option'=>1
        ],
        [
            'title' => 'cat',
            'options' => [
                'ძაღლი',
                'კატა'
            ],
            'correct_option'=>1
        ],
        [
            'title' => 'mirror',
            'options' => [
                'სარკე',
                'ფანჯარა'
            ],
            'correct_option'=>0
        ]
    ];
    

if($_SERVER['REQUEST_METHOD']=="POST"){
    $correctAnswers = 0;
    foreach($_POST['option'] as $questionIndex => $optionIndex){
        if($quizz[$questionIndex]['correct_option'] == $optionIndex){
            $correctAnswers++;
        }
    }
    echo '<p> სწორი პასუხების რაოდენობაა' . $correctAnswers.'</p>';
}

    ?>
    

    

<article>
    
<h1>DELETE</h1>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            
        <?php foreach($quizz as $qestionIndex => $question) : ?>
            <p>
                <?php echo $question['title']; ?>
                <ul>
                    <?php foreach($question['options'] as $o => $option ) : ?>
                    <li>
                        <input type="radio" name="option[<?=$questionIndex?>]" value="<?=$o?>">
                        <?=$option?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </p>
        <?php endforeach; ?>
        <button type="submit" name="button">შემოწმება</button>
        </form>
    </body>
    </html>
      
</article>