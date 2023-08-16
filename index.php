<html>
  <head>
    <title>AJAX Quotes</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Tulpen+One&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@700&display=swap');

      /* CSS to hide the quote container initially and apply fade-in animation */
        #quoteDisplay {
            display: none;
        }

        /* CSS for the fade-in animation */
        .fade-in {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

    </style>
  </head>
  <body>
    <h1>AJAX Quotes</h1>
    <p>This is a page that demonstrates how we are able to have dynamic changes while using php. There are multiple quotes rotating every 5 seconds.</p>
    <!-- Create a div to display the quote -->
    <div id="quoteDisplay"></div>
    <script>
      var counter = 0;
      function getRandomQuote() {
        
        var fonts = ["Qwitcher Grypen", "Tulpen One", "Shadows Into Light"];
        
        
        var xhr = new XMLHttpRequest();
        
        xhr.open('GET','randomQuotes.php', true);
        
        xhr.onload = function(){
          //code on return of data goes here
          if(xhr.status >= 200 && xhr.status <300){
            // Update the quoteDisplay div with the quote
            //document.querySelector("#quoteDisplay").innerText = xhr.responseText;
            var quoteDisplay = document.querySelector("#quoteDisplay");
            quoteDisplay.innerText = xhr.responseText;
            quoteDisplay.style.display = "block";
            quoteDisplay.style.fontFamily = fonts[counter];
            counter++;
            if (counter >= fonts.length){
              counter = 0;
            }
            quoteDisplay.classList.add("fade-in");

            setTimeout(function(){
              quoteDisplay.classList.remove("fade-in");
            },1000);
          } else { // something went wrong, give feedback
            // Update the quoteDisplay div with an error message
            document.querySelector("#quoteDisplay").innerText = "Failed to fetch Quote: " + xhr.status;
          }
        };

        xhr.onerror = function () {
          //code on data missing
          alert("oh No!");
        };

        xhr.send(); //sends data to server
      }

      function displayRandomQoute(){
        getRandomQuote(); //Initial Page Load
        setInterval(getRandomQuote,5000) //Run again at intervals
      } 

      //run on page load
      displayRandomQoute();
    </script>
  </body>
</html>
