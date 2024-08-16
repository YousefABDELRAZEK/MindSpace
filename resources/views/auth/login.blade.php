<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindspace-Login</title>
    <link rel="icon" type="image/x-icon" href="/galaxy.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=David+Libre:wght@400;500;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<style>
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    height: 100vh;
    margin: 0;
    background-image: linear-gradient(-20deg, #bf8fdf 0%, #faaca8 100%, #faaca8 100%);
}

.s1{


display: flex;
box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
height: 700px;
width: 1250px;
border-radius: 50px;
background-color: #ffedfa;

}
h1{
    color: #2d1135;
}
.img1 img{
    height: 680px;
    margin: 10px;
padding: 0px;
box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    border-radius: 50px;
    width: 600px;

}
.s2{
    margin-left: 40px;
    margin-top: 50px;
    font-family: "David Libre", serif;
    font-weight: 700;
    font-style: normal;
    font-size: 1.5rem;
}
h4{
    color:#787878;
}
input[type="text"],input[type="password"]{
    outline: none;
    border: 2px solid #2d1135;
    box-shadow: 3px 4px 0px 1px #e6b0ab;
    width: 290px;
    padding: 12px 10px;
    height: 20px;
    border-radius: 10px;
    margin: 10px;
    font-size: 1rem;
}
.btn01{
    padding: 15px;
    margin: 25px 0px;
    width: 320px;
    font-size: 1.2rem;
    background: #2d1135;
    color: #fbf5ff;
    border-radius: 10px;
    font-weight: 800;
    box-shadow: 3px 3px 0px 0px #e6b0ab;
    font-family: "David Libre", serif;
    font-style: normal;
}
button:hover{
    opacity: .9;
}
input[type="text"]:focus,input[type="password"]:focus,.btn01:focus
{
    transform: translateY(4px);
    box-shadow: 1px 2px 0px 0px #E99F4C;
}

.button.x {
    max-width: 320px;
    display: flex;
    justify-content: center;
    padding: 0.5rem 1.4rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    align-items: center;
    border-radius: 0.5rem;
    border: 1px solid rgba(24, 23, 23, 0.25);
    gap: 0.75rem;
    color: #ffffff;
    background-color: rgb(24, 23, 23);
    cursor: pointer;
    transition: all 0.6s ease;
    text-decoration: none;
  }
  
  .button.x svg {
    height: 24px;
    width: 24px;
    fill: #fff;
    margin-right: 0.5rem;
    text-decoration: none;
  }
  
  .button.x:hover {
    transform: scale(1.02);
    background-color: #333;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .button.x:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.3);
    text-decoration: none;
  }
  
  .button.x:active {
    transform: scale(0.98);
    opacity: 0.8;
  }
  
  @media (max-width: 480px) {
    .button.x {
      max-width: 100%;
    }
  }
  .btns{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
  }
  .divider {
    display: flex;
    align-items: center;
    width: 60%;
    margin-top: -10px;
    margin-bottom: 20px;
}

.line {
    flex-grow: 1;
    height: 0.5px;
    background-color: #ccc;
    margin: 10px;

}

.divider span {
    font-size: 1rem;
    color: #787878;
}
</style>
<body>
    <div class="s1">
        <div class="img1">
            <img src="/da44b410-e8d5-4e8a-8057-515e7cc5e725.jpg">
        </div>
        <div class="s2">
            <h1>Welcome Back</h1>
            <h4>Enter your email and password to access your account</h4>
            <input type="text" placeholder="Email"/><br>
            <input type="password" placeholder="Password"/>
            <div class="btns">

          
            <br><button class="btn01">Sign in</button><br>
            <div class="divider">
                <hr class="line">
                <span>or</span>
                <hr class="line">
            </div>
          <a href="{{ url('/auth/redirect')}}">

<button class="button x">
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff">
    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
    <g
      id="SVGRepo_tracerCarrier"
      stroke-linecap="round"
      stroke-linejoin="round"
    ></g>
    <g id="SVGRepo_iconCarrier">
      <title>github</title>
      <rect width="24" height="24" fill="none"></rect>
      <path
        d="M12,2A10,10,0,0,0,8.84,21.5c.5.08.66-.23.66-.5V19.31C6.73,19.91,6.14,18,6.14,18A2.69,2.69,0,0,0,5,16.5c-.91-.62.07-.6.07-.6a2.1,2.1,0,0,1,1.53,1,2.15,2.15,0,0,0,2.91.83,2.16,2.16,0,0,1,.63-1.34C8,16.17,5.62,15.31,5.62,11.5a3.87,3.87,0,0,1,1-2.71,3.58,3.58,0,0,1,.1-2.64s.84-.27,2.75,1a9.63,9.63,0,0,1,5,0c1.91-1.29,2.75-1,2.75-1a3.58,3.58,0,0,1,.1,2.64,3.87,3.87,0,0,1,1,2.71c0,3.82-2.34,4.66-4.57,4.91a2.39,2.39,0,0,1,.69,1.85V21c0,.27.16.59.67.5A10,10,0,0,0,12,2Z"
      ></path>
    </g>
  </svg>
  Continue with Github
</button>
            </a>
</div>
        </div>
    </div>
</body>
</html>