<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .button{
                border:none;
                color:white;
                padding:15px 32px;
                text-align:center;
                text-decoration: none;
                display:inline-block;
                font-size: 16px;
                margin:4px 2px;
                cursor:pointer;
            }
            .button1{
                background-color: #4CAF50;
            }
            .button2{
                background-color: aqua;
            }
        </style>
    </head>
        
        
        
        
    <body>
        <h1>
            Hello world!!
        </h1>
	<input type="file" id="fileInput" hidden/>
        <button class="button button1" type="button" id="uploadBtn">upload</button>
        <button class="button button2" type="submit" id="submit">submit</button>

	<script>uploadBtn.addEventListener('click', () => fileInput.click())</script>
    </body>    
</html>        

