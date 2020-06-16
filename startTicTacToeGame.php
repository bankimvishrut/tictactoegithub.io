<?php 
include 'Links.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tic-Tac-Toe Game</title>
     <link rel="stylesheet" href="">
 </head>
 <style>
   
            h1
            {
                font-family: 'Muli', sans-serif;
                text-align: center;
                text-decoration: underline;
                color: #E6E6FA;  
                font-weight: bold;
                font-size: 3em;
            }
            h2
            {
                font-family: 'Muli', sans-serif;
                text-align: center;
                color: #87CEFA;

            }
            
            #game td
            {
                height: 135px;
                width: 135px;
                border: solid   #4B0082 2px;
                text-align: center;
                font-family:' cursive';
                font-size: 50px;
                color: white;
            }
            .btnid
            {
                position: relative;
                height: 20px;

            }
            .restartbtn
            {
                position: absolute;
                left: 38%;
                color: #000000;
                width: 10%;
                padding-left: 12px;
                background-color: #1E90FF;
                font-size: 1em;
                border-radius: 12px;
                border: 1px solid #191970;
            }
             .restartbtn:hover
            {
                background-color: #FFF0F5;
                opacity: 0.3;
                color: #FFFFFF;
            }

            .exitbtn
            {
                position: absolute;
                left: 52%;
                color: #000000;
                width: 10%;
                background-color: #1E90FF;
                font-size: 1em;
                padding-left: 28px;
                border-radius: 12px;
                border: 1px solid #191970;
            }
              .exitbtn:hover
            {
                background-color: #FFF0F5;
                opacity: 0.3;
                color: #FFFFFF;
            }
            .center
            {
              height: 100vh;
              width: 100%;
               background: url('gamePicTic.jpg') center no-repeat;
               background-size: cover;
            }
            @media only screen and (max-width: 375px) 
            {
              .restartbtn
              {
                left: 35px;
                width: 35%;
                padding-left: 2px;
              }
                .exitbtn
                  {
                    left: 55%;
                    width: 35%;
                    padding-left: 18px;
                  }
                  #game
                  {
                    margin-left: 8%;
                  }
                   #game td
                  {
                    height: 100px;
                    width: 100px;
                  }
                  .size
                  {
                    width: 316px;
                    height: 316px;
                  }
                  .center
                  {
                    width: auto;
                  }
                  h1
                  {
                    font-size: 1.6em; 
                    margin-left: 30px; 
                 }
                 
            }
          @media only screen and (min-width:376px) and (max-width:768px)
          {
            .restartbtn
              {
                height: 8%;
                padding: 10px;
                left: 22%;
                width: 18%;
                margin-left: 10px;
                font-size: 5em;
              }
              .exitbtn
              {
                height: 8%;
                padding: 10px;
                left: 48%;
                width: 18%;
                margin-left: 25px;
                padding-left: 25px;
                font-size: 5em;
              }
               #game
                  {
                    margin-left: 7%;
                  }
                 #game td
                  {
                    height: 200px;
                    width: 200px;
                    font-size: 8em;
                  }

          }
          @media only screen and (min-width:769px) and (max-width: 1024px)
          {
            #game
                  {
                    margin-left: 9%;
                  }
             #game td
                  {
                    height: 250px;
                    width: 250px;
                    font-size: 8em;
                  }
                  .exitbtn
              {
                height: 8%;
                padding: 10px;
                padding-top:30px;
                left: 48%;
                width: 20%;
                text-align: center;
                font-size: 10em;
              }
                    .restartbtn
              {
                height: 8%;
                padding: 10px;
                padding-top:30px;
                left: 22%;
                width: 20%;
                text-align: center;
                font-size: 10em;
              }

          }
                      
     
 </style>
 <body>
      <div  id="viewdata" class="center"><br>
        <h1> Tic Tac Toe Game : </h1>
        <h2>Turn: <span id="playerName"> </span></h2><br>
     <table class=" table-responsive-sm table-responsive-md" id="game" align="center"> 
                <tbody>
                    <tr>
                        <td onclick="boxClicked(1,1)"></td>
                        <td onclick="boxClicked(1,2)"></td>
                        <td onclick="boxClicked(1,3)"></td>
                    </tr>
                    <tr>
                        <td onclick="boxClicked(2,1)"></td>
                        <td onclick="boxClicked(2,2)"></td>
                        <td onclick="boxClicked(2,3)"></td>
                    </tr>
                    <tr>
                        <td onclick="boxClicked(3,1)"></td>
                        <td onclick="boxClicked(3,2)"></td>
                        <td onclick="boxClicked(3,3)"></td>
                    </tr>
                </tbody>
            </table><br>
            <div class btnid>
            <div class="restartbtn">
                <button class="btn btn-lg " onclick="restartGame()">RESTART</button>
            </div>
            <div class="exitbtn">
                <!-- <button class="btn btn-lg" id="menu">EXIT</button> -->
                <a href="index.html" class="btn btn-lg">EXIT</a>
            </div>
        </div>
      </div>
 </body>
 <script>

         


            const gameStarted = 0
            const gameEnded = 1
            const playerSpan = document.getElementById('playerName')
            const gameTable= document.getElementById('game')
            const game =
            {
                state: 'gameStarted',
                turn: 'x',
                move : 0
            }
            function endGame(winner )
            {
                if(winner)
                {  
                    swal({
                      title: "Game Over !",
                      text: "You won! Please Restart The Game",
                      className: 'size',
                      icon: "success",
                    });
                 }
                else
                {
                     swal({
                      title: "Game Over !",
                      text: "It's A Draw! Please Restart The Game",
                      className: 'size',
                      icon: "info",
                    });
                }
                game.state = gameEnded
            }
            function restartGame()
            {
                if(Math.random()>0.5)
                {
                    game.turn ='x'
                }
                else
                {
                    game.turn ='o'
                }
                game.state = gameStarted
                game.move = 0
                Array.from(document.getElementsByTagName('td')).forEach(cell =>
                                    {
                                        cell.textContent = ' '
                                    })
            }
            function nextTurn()
            {
                if(game.state == gameEnded)
                {
                    return
                }
                game.move++
                if(game.turn ==='x')
                {
                    game.turn = 'o'
                }
                else
                {
                    game.turn ='x'
                }
                if(game.move === 9)
                {
                    endGame()
                }
                playerSpan.textContent = game.turn
            }
    // common function
    function isSeqCaptured(arrayOf3Cells)
            {
                let winningCombo = game.turn + game.turn + game.turn
                if(arrayOf3Cells.map(i => i.textContent).join('')===winningCombo)
                {
                    endGame(game.turn)
                }
            }
             // Row check krne ka function
            function isRowCaptured(row)
            {
                let tableRow = Array.from(gameTable.children[0].children[row-1].children)
                isSeqCaptured(tableRow)
            }
             // Column check krne ka function
            function isColCaptured(col)
            {
                let tableCol =
                [
                    gameTable.children[0].children[0].children[col-1],
                    gameTable.children[0].children[1].children[col-1],
                    gameTable.children[0].children[2].children[col-1]
                ]
                isSeqCaptured(tableCol)
            }
    // Diagonal check krne ka function
    function isDigCaptured(row,col)
            {
                let diag1 =
                [
                    gameTable.children[0].children[0].children[0],
                    gameTable.children[0].children[1].children[1],
                    gameTable.children[0].children[2].children[2]
                ]
                let diag2 =
                [
                    gameTable.children[0].children[0].children[2],
                    gameTable.children[0].children[1].children[1],
                    gameTable.children[0].children[2].children[0]
                ]
                isSeqCaptured(diag1)
                isSeqCaptured(diag2)
            }


    // Click hone par function
    function boxClicked(row,col)
            {

                        if(game.state === gameEnded)
                        {
                             swal({
                                  title: "Game Over !",
                                  text: " Please Restart The Game !",
                                  className: 'size',
                                  icon: "warning",
                                });
                            return
                        }
                        console.log('box clicked =',row,col)
                        let clickBox = gameTable.children[0].children[row-1].children[col-1]
                        clickBox.textContent = game.turn
                        isRowCaptured(row)
                        isColCaptured(col)
                        isDigCaptured(row,col)
                        nextTurn()
                }

             

        </script>
 </html>