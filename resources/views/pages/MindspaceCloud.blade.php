<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindSpace Cloud</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/galaxy.png">
</head>
<style>
   @font-face {
    font-family: 'Mackinac';
    src: url('/Fontspring-DEMO-P22Mackinac-Thin.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-ThinItalic.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-ExtraLight.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-ExtraLightItalic.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-Light.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-LightItalic.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-Book.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-BookItalic.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-Medium.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-MediumItalic.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-Bold.otf') format('opentype'),
         url('/Fontspring-DEMO-P22Mackinac-BoldItalic.otf') format('opentype');
         font-weight: 100 200 300 400 500 700;
    font-style: normal italic;
}
body{
    background-color: #17153B;
    
    font-family: 'Mackinac', Arial, sans-serif;
    margin: 0;
    height: 100%;
}
.navbar{
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(255,255,255,.07);
    backdrop-filter: blur(30px);
    box-shadow: rgba(0, 0, 0, 0.6) 3px 3px 6px 0px inset, rgba(59, 59, 59, 0.2) -3px -3px 6px 1px inset;

    padding-top: 20px;
    overflow-x: hidden; /* Disable horizontal scroll */
    transition: 0.3s;
    border-top-right-radius: 20px;  
    border-bottom-right-radius: 20px; 
}
.a{
    padding: 15px 30px;
    margin-top: 30px;
    font-family: 'Mackinac';
    font-optical-sizing: auto;
    font-weight: 500;
    font-style: normal;
     text-decoration: none;
       padding: 20px;
       font-size: 1.2rem;
       color: #f5f5f4;
       transition: 0.3s ease;
    display: block;
    transition: 0.3s;

}
.main{
    font-family: "Montserrat", sans-serif;
   font-optical-sizing: auto;
   font-weight: 700;
   font-style: normal;
   font-size: 2rem;
   text-decoration: none;
   padding: 20px;
   padding-top: -100px;
   color: #f5f5f4;
   transition: 0.3s ease;
}
.main:hover{
    color: #8a2be2;

}
.btn1{
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    font-size: 1.1rem;
    text-decoration: none;
    border-radius: 50px;
    border: 0px;
    background-color:#e2bf24 ;
    padding: 5px;
    color:#151515 ;
    width: 100px;
    transition: 0.3s ease;
    margin-left: 20px;
}
.btn1:hover{
    cursor: pointer;
    background-color:#fae161 ;
    color:#151515 ;
}
.a:hover {
    background-color: #575757;
    color: #a24cf2;
    border-radius: 20px;
    
}
@media screen and (max-width: 768px) {
    .navbar {
        width: 100%; /* Full width on smaller screens */
        height: auto; /* Auto height for the sidebar */
        position: relative;
    }
}
.section1{
    margin-left: 400px;
    font-size: 2rem;
    color: #f5f5f4;
    display: flex;
    flex-direction: row;
}
.section2{
    width: 80%;
    height: 80vh;
    background-color: rgba(255,255,255,.07);
    backdrop-filter: blur(30px);
    box-shadow: rgba(0, 0, 0, 0.6) 3px 3px 6px 0px inset, rgba(59, 59, 59, 0.2) -3px -3px 6px 1px inset;
    border-radius: 20px;
    display: flex;
   margin-left: 400px;

   box-shadow: rgba(37, 37, 37, 0.6) 3px 3px 6px 0px inset, rgba(59, 59, 59, 0.2) -3px -3px 6px 1px inset;
}
.section2 h2{
    color: #f5f5f4;
    font-size: 2.3rem;
    padding-left: 50px;
}
.tb{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 80%;


}
table{
    font-size: 2rem;
    color: #f5f5f4;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 10px;
    overflow: hidden;
    width: 80%;
    margin-top: -300px;
}
td{
    color: #f5f5f4;
    background-color: #2E236C;
    padding: 5px;
   
}
th{
    background-color: #f5f5f4;
    padding: 5px;
    color: #151515;
   
}

.cssbuttons-io-button {
    display: flex;
    align-items: center;
    font-family: inherit;
    font-weight: 500;
    font-size: 1.2rem;
    padding: 0.8em 1.5em;
    margin-left: 50px;
    color: #1b1a1a;
    background-color: #f5f5f4;
    text-align: center;
    align-items: center;
    justify-content: center;

    border: none;
    box-shadow: 0 0.7em 1.5em -0.5em rgba(184, 146, 255, 0.6);
    letter-spacing: 0.05em;
    border-radius: 20em;
    cursor: pointer;
}

.cssbuttons-io-button svg {
    margin-right: 8px;
    fill: #1b1a1a;
}

.cssbuttons-io-button:hover {
    box-shadow: 0 0.5em 1.5em -0.5em rgba(149, 91, 255, 0.6);
}

.cssbuttons-io-button:active {
    box-shadow: 0 0.3em 1em -0.5em rgba(160, 109, 255, 0.6);
}

  .grid{
    display: flex;
    flex-direction:column;

  }
  .test{
    position: absolute;
  width: 800px;
  height: 1000px;
  background: linear-gradient(135deg, #b9a012, #8A2BE2);

  right: 0;
  
  margin-right: 1400px;
  margin-top: 100px;
 
  z-index: -1;
  border-radius: 50%;
  filter: blur(130px);
  }
.test2{
    position: absolute;
    width: 800px;
    height: 700px;
    background: linear-gradient(135deg, #e9a94b, #622a97);
  right: 0;
  
  margin-right: 10px;
  margin-top: 600px;
 
  z-index: -1;
  border-radius: 50%;
  filter: blur(130px);
}
/* From Uiverse.io by vinodjangid07 */ 
.Btn {
  width: 50px;
  height: 50px;
  border: none;
  border-radius: 50%;
  background-color: rgb(27, 27, 27);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: relative;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.11);
}

.svgIcon {
  fill: rgb(214, 178, 255);
}

.icon2 {
  width: 18px;
  height: 5px;
  border-bottom: 2px solid rgb(182, 143, 255);
  border-left: 2px solid rgb(182, 143, 255);
  border-right: 2px solid rgb(182, 143, 255);
}

.tooltip {
  position: absolute;
  right: -105px;
  opacity: 0;
  background-color: rgb(12, 12, 12);
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition-duration: .2s;
  pointer-events: none;
  letter-spacing: 0.5px;
}

.tooltip::before {
  position: absolute;
  content: "";
  width: 10px;
  height: 10px;
  background-color: rgb(12, 12, 12);
  background-size: 1000%;
  background-position: center;
  transform: rotate(45deg);
  left: -5%;
  transition-duration: .3s;
}

.Btn:hover .tooltip {
  opacity: 1;
  transition-duration: .3s;
}

.Btn:hover {
  background-color: rgb(150, 94, 255);
  transition-duration: .3s;
}

.Btn:hover .icon2 {
  border-bottom: 2px solid rgb(235, 235, 235);
  border-left: 2px solid rgb(235, 235, 235);
  border-right: 2px solid rgb(235, 235, 235);
}

.Btn:hover .svgIcon {
  fill: rgb(255, 255, 255);
  animation: slide-in-top 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@keyframes slide-in-top {
  0% {
    transform: translateY(-10px);
    opacity: 0;
  }

  100% {
    transform: translateY(0px);
    opacity: 1;
  }
}
.btnss{
    justify-content: center;
    display: flex;
    align-items: center;
    text-align: center;
}

/* From Uiverse.io by vinodjangid07 */ 
.button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: rgb(20, 20, 20);
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.svgIcon path {
  fill: white;
}

.button:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.button:hover .svgIcon {
  width: 50px;
  transition-duration: .3s;
  transform: translateY(60%);
}

.button::before {
  position: absolute;
  top: -20px;
  content: "Delete";
  color: white;
  transition-duration: .3s;
  font-size: 2px;
}

.button:hover::before {
  font-size: 13px;
  opacity: 1;
  transform: translateY(30px);
  transition-duration: .3s;
}
.footer{
    justify-content: center;
    display: flex;
    align-items: center;
    text-align: center;
    margin-left: 80px;
    color: #f5f5f4;
    font-size: 1rem;
    margin-top: 50px;
}


</style>
<body>
    <div class="navbar">
        
        <a href="{{url('home')}}" class="main">MindSpace</a>
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-bottom:-5px">

            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            
            <g id="SVGRepo_iconCarrier"> <path d="M7.45284 2.71266C7.8276 1.76244 9.1724 1.76245 9.54716 2.71267L10.7085 5.65732C10.8229 5.94743 11.0526 6.17707 11.3427 6.29148L14.2873 7.45284C15.2376 7.8276 15.2376 9.1724 14.2873 9.54716L11.3427 10.7085C11.0526 10.8229 10.8229 11.0526 10.7085 11.3427L9.54716 14.2873C9.1724 15.2376 7.8276 15.2376 7.45284 14.2873L6.29148 11.3427C6.17707 11.0526 5.94743 10.8229 5.65732 10.7085L2.71266 9.54716C1.76244 9.1724 1.76245 7.8276 2.71267 7.45284L5.65732 6.29148C5.94743 6.17707 6.17707 5.94743 6.29148 5.65732L7.45284 2.71266Z" fill="#8a2be2"/> <path opacity="0.5" d="M16.9245 13.3916C17.1305 12.8695 17.8695 12.8695 18.0755 13.3916L18.9761 15.6753C19.039 15.8348 19.1652 15.961 19.3247 16.0239L21.6084 16.9245C22.1305 17.1305 22.1305 17.8695 21.6084 18.0755L19.3247 18.9761C19.1652 19.039 19.039 19.1652 18.9761 19.3247L18.0755 21.6084C17.8695 22.1305 17.1305 22.1305 16.9245 21.6084L16.0239 19.3247C15.961 19.1652 15.8348 19.039 15.6753 18.9761L13.3916 18.0755C12.8695 17.8695 12.8695 17.1305 13.3916 16.9245L15.6753 16.0239C15.8348 15.961 15.961 15.8348 16.0239 15.6753L16.9245 13.3916Z" fill="#8a2be2"/> </g>
            
            </svg>
        <a href="{{url('home')}}" class="a"><i class="fa-solid fa-house" style="color:fff; margin-right: 10px;"></i> Home </a>
        <a href="{{url('mindsketch')}}" class="a"><i class="fa-solid fa-pen-ruler" style="color:fff; margin-right: 10px;"></i>MindSketch</a>
        <a href="{{url('cloudspace')}}" class="a"> <i class="fa-solid fa-cloud-arrow-up" style="color:fff; margin-right: 10px;"></i>Space Cloud</a>
        <a href="https://github.com/YousefABDELRAZEK" class="a"> <i class="fa-solid fa-star" style="color:fff;; margin-right: 10px;"></i>About</a>
        
          
    </div>
  
    
    <div class="section1">
        <h1>Welcome <span style="color: #a24cf2;">{{ Auth::user()->name }}</span></h1>
        <div class="test"></div>
        <div class="test2"></div>
        <picture>
            <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.webp" type="image/webp">
            <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/2728/512.gif" alt="✨" width="80" height="80" style="margin-bottom: -80px; margin-left: 20px;">
          </picture>
    </div>
    <div class="section2">
        <div class="grid">

      
        <h2>My Files 📂</h2>
   <div class="btn-div">
    <form method="POST" action="{{route('files.store')}}" enctype="multipart/form-data">
        @csrf
        <label class="cssbuttons-io-button">
            <input type="file" name="file" style="display: none;" onchange="this.form.submit();" />
            <svg viewBox="0 0 640 512" fill="white" height="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"></path>
            </svg>
            <span>Upload</span>
        </label>
    </form>
</div>
</div>
        <div class="tb">

            <table border="2px">
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>Path</th>
                        <th>Download</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    <tr>
                        <td title="{{$file->name}}">{{ Str::limit($file->name, 20) }}</td>
                        <td title="{{ $file->path }}">{{ Str::limit($file->path, 20) }}</td>

                        <td><a href="{{route('files.download',$file->id)}}">
              <div class="btnss">
               
<button class="Btn">
   <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path></svg>
   <span class="icon2"></span>
   <span class="tooltip">Download</span>
</button>
</div>                </a></td>
                        <td>
                            <form action="{{route('files.destroy', $file->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <div class="btnss">
                             
                                    <button class="button" type="submit">
                                      <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                                    </button>
                                </div>
                               
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 MindSpace. All rights reserved.</p>
    </div>
</body>
</html>