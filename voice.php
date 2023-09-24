<!DOCTYPE html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>POC Reconhecimento por vor</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
          <h1>Voice control</h1>
          <div class="app"> 
              <h3>Add Note</h3>
              <div class="input-single">
                <input type="email" id="username" placeholder="Add a note by writing or using voice recognition" rows="6"></textarea>
              </div>         
              <button id="start-record-btn" title="Start Recording">Start</button>
              <button id="pause-record-btn" title="Pause Recording">Pause</button>
              <button id="save-note-btn" title="Save Note">Save</button>   
              <p id="recording-instructions">Press The  <strong>start recognition button</strong>  and give permission.</p>
              <h3>Grades</h3>
              <ul id="notes">
                <li>
                  <p class="no-notes">You don't have any notes.</p>
                </li>
              </ul>
          </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>


