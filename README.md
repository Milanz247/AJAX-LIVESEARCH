# AJAX-LIVESEARCH

<br>
<br><br>

![Screenshot from 2023-08-15 21-12-00](https://github.com/Msenarathna47/AJAX-LIVESEARCH/assets/117444289/b28ea8cb-b66b-4e36-b601-50337d27ca98)
<br><br>
<p dir="auto">Code Part for suggest :</p>
<div dir="auto"><div class="snippet-clipboard-content notranslate position-relative overflow-auto"><pre class="notranslate">
<code>   
    <script>
        function suggest(str){
            if(str.length == 0){
                document.getElementById("hint").innerHTML = "";
                return;
            }else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function (){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("hint").innerHTML = xmlhttp.responseText;
                        
                    } 
                }
                xmlhttp.open("GET","suggest.php?q="+str , true);
                xmlhttp.send();
            }
        }
    </script>
  
</code>
</pre><div class="zeroclipboard-container position-absolute right-0 top-0">
    <clipboard-copy aria-label="Copy" class="ClipboardButton btn js-clipboard-copy m-2 p-0 tooltipped-no-delay" data-copy-feedback="Copied!" data-tooltip-direction="w" value="    git clone https://github.com/MSenarathna47/sales-inventry-system.git" tabindex="0" role="button">
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-copy js-clipboard-copy-icon m-2">
    <path d="M0 6.75C0 5.784.784 5 1.75 5h1.5a.75.75 0 0 1 0 1.5h-1.5a.25.25 0 0 0-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 0 0 .25-.25v-1.5a.75.75 0 0 1 1.5 0v1.5A1.75 1.75 0 0 1 9.25 16h-7.5A1.75 1.75 0 0 1 0 14.25Z"></path><path d="M5 1.75C5 .784 5.784 0 6.75 0h7.5C15.216 0 16 .784 16 1.75v7.5A1.75 1.75 0 0 1 14.25 11h-7.5A1.75 1.75 0 0 1 5 9.25Zm1.75-.25a.25.25 0 0 0-.25.25v7.5c0 .138.112.25.25.25h7.5a.25.25 0 0 0 .25-.25v-7.5a.25.25 0 0 0-.25-.25Z"></path>
</svg>
      <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-check js-clipboard-check-icon color-fg-success d-none m-2">
    <path d="M13.78 4.22a.75.75 0 0 1 0 1.06l-7.25 7.25a.75.75 0 0 1-1.06 0L2.22 9.28a.751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018L6 10.94l6.72-6.72a.75.75 0 0 1 1.06 0Z"></path>
</svg>
    </clipboard-copy>
  </div></div><div dir="auto">








</div></div>

