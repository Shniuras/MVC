first_dice_img = document.getElementById('first_dice');
second_dice_img = document.getElementById('second_dice');
third_dice_img = document.getElementById('third_dice');
start_game_button = document.getElementById('start_game');
roll_dice_button = document.getElementById('roll_dice');
win_div = document.getElementById('win');
result_div = document.getElementById('result');

start_game_button.addEventListener('click', reset);
roll_dice_button.addEventListener('click', roll);
win = 0;
roll_count = 0;
angle1 = 0;
angle2 = 0;
angle3 = 0;

// atstato kauliukus ir kitus laukus
function reset() {
    first_dice_img.src = "/MVC/app/views/assets/img/dice/6.png";
    second_dice_img.src = "/MVC/app/views/assets/img/dice/6.png";
    third_dice_img.src = "/MVC/app/views/assets/img/dice/6.png";
    roll_dice_button.disabled = false;
    win_div.innerHTML = 'You have 4 rolls!';
    win = 0;
    roll_count = 0;
    result_div.innerHTML = '';
}

function rotate() {
    $("#first_dice").css({'transform': 'rotate('+(angle1 += 360)+'deg)', 'transition': '1s'});
    $("#second_dice").css({'transform': 'rotate('+(angle2 += 360)+'deg)', 'transition': '1s'});
    $("#third_dice").css({'transform': 'rotate('+(angle3 += 360)+'deg)', 'transition': '1s'});
}

function show_dices(game) {
    // parodom kauliukus kurie iskrito
    first_dice_img.src = "/MVC/app/views/assets/img/dice/"+game[0]+".png";
    second_dice_img.src = "/MVC/app/views/assets/img/dice/"+game[1]+".png";
    third_dice_img.src = "/MVC/app/views/assets/img/dice/"+game[2]+".png";

    // parodom visus kauliukus
    result_div.innerHTML += "Roll "+(roll_count+1)+":" + game[0] + "/" +game[1]+"/"+game[2];
}

// postinam i game.php ir irasom laimejima i duomenu baze
function post_result() {
    $.post("/Dice.php",
        {
            result: win/10
        },
        function (response) {
            console.log(response);
        });
}

// tikrinam ar kauliukai sutampa
function check_match(game) {
    loop:
        for(i = 0; i < game.length; i++) {
            number = game.shift();

            for (y = 0; y < game.length; y++) {
                if (number == game[y]) {
                    win += number;
                    win_div.innerHTML = 'You win: ' + win/10+' euro';
                    break loop;
                }
            }
        }
}

// idedam kauliuku skaicius i game masyva
function push_dices(game) {
    for (var i = 0; i < 3; i++) {
        random_number = Math.ceil(Math.random() * 6);
        game.push(random_number);
    }
}

// tikrinam ar yra laimejimas
function check_for_win() {
    if (win == 0) {
        win_div.innerHTML = "Game over! You didn't win anything.";
    } else {
        win_div.innerHTML = 'Game over! You won: '+win/10+' euro';
    }
}

// tikrinama ar zaidimas baigesi
function check_for_end() {
    if (roll_count == 4) {
        post_result();
        roll_dice_button.disabled = true;
        check_for_win();
        roll_count = 0;
        win = 0;
    }
}

// ridenama kauliukus
function roll() {
    // skaiciu masyvas
    var game = [];
    rotate();
    push_dices(game);
    show_dices(game);

    // panaikinam reiksme win dive
    win_div.innerHTML = '';

    check_match(game);
    // kiekvieno ridemino metu padidinama reiksme
    roll_count++;
    check_for_end();
}