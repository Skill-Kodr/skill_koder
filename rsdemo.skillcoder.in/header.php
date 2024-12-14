


<style>
    
.chatbot__button {
  position: fixed;
  bottom: 130px;
    right: 40px;
    width: 65px;
    height: 65px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #227ebb;
  color: #f3f7f8;
  border: none;
  border-radius: 50%;
  outline: none;
  cursor: pointer;
  z-index: 999;
}
.chatbot__button span {
  position: absolute;
}
.show-chatbot .chatbot__button span:first-child,
.chatbot__button span:last-child {
  opacity: 0;
}
.show-chatbot .chatbot__button span:last-child {
  opacity: 1;
}
.chatbot {
  position: fixed;
  bottom: 100px;
  right: 40px;
  width: 330px;
  background-color: #f3f7f8;
  border-radius: 15px;
  box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1) 0 32px 64px -48px rgba(0, 0, 0, 0.5);
  transform: scale(0.5);
  transition: transform 0.3s ease;
  overflow: hidden;
  opacity: 0;
  z-index: 999;
  pointer-events: none;
}
.show-chatbot .chatbot {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
}
.chatbot__header {
  position: relative;
  background-color: #227ebb;
  text-align: center;
  padding: 16px 0;
}
.chatbot__header span {
  display: none;
  position: absolute;
  top: 50%;
  right: 20px;
  color: #202020;
  transform: translateY(-50%);
  cursor: pointer;
}
.chatbox__title {
  font-size: 1.4rem;
  color: #f3f7f8;
}
.chatbot__box {
  height: 380px;
  overflow-y: auto;
  padding: 30px 20px 100px;
}
.chatbot__chat {
  display: flex;
}
.chatbot__chat p {
  max-width: 75%;
  font-size: 0.95rem;
  white-space: pre-wrap;
  color: #202020;
  background-color: #019ef9;
  border-radius: 10px 10px 0 10px;
  padding: 12px 16px;
}
.chatbot__chat p.error {
  color: #721c24;
  background: #f8d7da;
}
.incoming p {
  color: #202020;
  background: #bdc3c7;
  border-radius: 10px 10px 10px 0;
}
.incoming span {
  width: 32px;
  height: 32px;
  line-height: 32px;
  color: #f3f7f8;
  background-color: #227ebb;
  border-radius: 4px;
  text-align: center;
  align-self: flex-end;
  margin: 0 10px 7px 0;
}
.outgoing {
  justify-content: flex-end;
  margin: 20px 0;
}
.incoming {
  margin: 20px 0;
}
.chatbot__input-box {
  position: absolute;
  bottom: 0;
  width: 100%;
  display: flex;
  gap: 5px;
  align-items: center;
  border-top: 1px solid #227ebb;
  background: #f3f7f8;
  padding: 5px 20px;
}
.chatbot__textarea {
  width: 100%;
  min-height: 55px;
  max-height: 180px;
  font-size: 0.95rem;
  padding: 16px 15px 16px 0;
  color: #202020;
  border: none;
  outline: none;
  resize: none;
  background: transparent;
}
.chatbot__textarea::placeholder {
  font-family: 'Poppins', sans-serif;
}
.chatbot__input-box span {
  font-size: 1.75rem;
  color: #202020;
  cursor: pointer;
  visibility: hidden;
}
.chatbot__textarea:valid ~ span {
  visibility: visible;
}

/*
@media (max-width: 490px) {
  .chatbot {
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    border-radius: 0;
  }
  .chatbot__box {
    height: 90%;
  }
  .chatbot__header span {
    display: inline;
  }
}
*/

</style>

<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0"
    />
<!-- Code :) -->
   <button class="chatbot__button">
      <span class="material-symbols-outlined">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <div class="chatbot__header">
        <h3 class="chatbox__title">Chatbot</h3>
        <span class="material-symbols-outlined">close</span>
      </div>
      <ul class="chatbot__box">
        <li class="chatbot__chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there. How can I help you today?</p>
        </li>
        <li class="chatbot__chat outgoing">
          <p>...</p>
        </li>
      </ul>
      <div class="chatbot__input-box">
        <textarea
          class="chatbot__textarea"
          placeholder="Enter a message..."
          required
        ></textarea>
        <span id="send-btn" class="material-symbols-outlined">send</span>
      </div>
    </div>
<header class="ltn__header-area ltn__header-5 ltn__header-logo-and-mobile-menu-in-mobile ltn__header-logo-and-mobile-menu ltn__header-transparent--- gradient-color-4---">
       <div class="ltn__header-top-area section-bg-6">
           <div class="container">
               <div class="row">
                   <div class="col-md-7">
                       <div class="ltn__top-bar-menu">
                           <ul>
                               <li><a href="mailto:info@akshaurav.com"><i class="icon-mail"></i> info@akshaurav.com</a></li>
                               <li><a href="locations.php"><i class="icon-mobile"></i> +91-9525115145</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-md-5">
                       <div class="top-bar-right text-end">
                           <div class="ltn__top-bar-menu">
                               <ul>
                                   <li>
                                       <div class="ltn__social-media">
                                           <ul>
                                               <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                               <li><a href="#" title="Instagram" target="_nlank"><i class="fab fa-instagram"></i></a></li>

                                               <li><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                           </ul>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- ltn__header-top-area end -->

       <!-- ltn__header-middle-area start -->
       <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
           <div class="container">
               <div class="row">
                   <div class="col">
                       <div class="site-logo-wrap">
                           <div class="site-logo">
                               <a href="index.php"><img src="img/logoo.png" width="100" alt="Logo"></a>
                           </div>
                           <div class="get-support clearfix d-none">
                               <div class="get-support-icon">
                                   <i class="icon-call"></i>
                               </div>
                               <div class="get-support-info">
                                   <h6>Get Support</h6>
                                   <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col header-menu-column">
                       <div class="header-menu d-none d-xl-block">
                           <nav>
                               <div class="ltn__main-menu">
                                   <ul>
                                       <li><a href="index.php">Home</a> </li>
                                       <li class="menu-icon"><a href="#">About</a>
                                           <ul>
                                               <li><a href="about.php">About</a></li>
                                               <li><a href="mission_vision.php">Mission & Vision</a></li>
                                               <li><a href="team.php">Team</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="service.php">Our Properties</a></li>
                                       <li><a href="serv3.php">Our Services</a></li>
                                   
                                       <li><a href="projects.php">Projects</a></li>
                                       <li><a href="gallery.php">Gallery</a></li>
                                       <li><a href="our-partner.php">Partner With Us</a></li>
                                       <li><a href="contact.php">Contact</a></li>
                                   </ul>
                               </div>
                           </nav>
                       </div>
                   </div>
                   <div class="col--- ltn__header-options ltn__header-options-2 ">
                       <!-- Mobile Menu Button -->
                       <div class="mobile-menu-toggle d-xl-none">
                           <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                               <svg viewBox="0 0 800 600">
                                   <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                   <path d="M300,320 L540,320" id="middle"></path>
                                   <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                               </svg>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- ltn__header-middle-area end -->
   </header>
   <!-- HEADER AREA END -->


   <!-- Utilize Mobile Menu Start -->
   <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
       <div class="ltn__utilize-menu-inner ltn__scrollbar">
           <div class="ltn__utilize-menu-head">
               <div class="site-logo">
                   <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
               </div>
               <button class="ltn__utilize-close">×</button>
           </div>
           <div class="ltn__utilize-menu">
               <ul>
                   <li><a href="index.php">Home</a></li>
                   <li><a href="#">About</a>
                       <ul class="sub-menu">
                           <li><a href="about.php">About</a></li>
                           <li><a href="mission_vision.php">Mission Vision</a></li>
                           <li><a href="team.php">Team</a></li>
                       </ul>
                   </li>
                   <li><a href="serv3.php">Our Services</a></li>
                   <li><a href="projects.php">Projects</a></li>
                   <li><a href="gallery.php">Gallery</a></li>
                   <li><a href="our-partner.php">Partner With Us</a></li>
                   <li><a href="contact.php">Contact</a></li>
               </ul>
           </div>
           <div class="ltn__social-media-2">
               <ul>
                   <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                   <li><a href="#!" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="#!" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
               </ul>
           </div>
       </div>
   </div>

   <script>
    const chatbotToggle = document.querySelector('.chatbot__button');
const sendChatBtn = document.querySelector('.chatbot__input-box span');
const chatInput = document.querySelector('.chatbot__textarea');
const chatBox = document.querySelector('.chatbot__box');
const chatbotCloseBtn = document.querySelector('.chatbot__header span');

let userMessage;
// Need GPT key
const inputInitHeight = chatInput.scrollHeight;
const API_KEY = 'HERE';

const createChatLi = (message, className) => {
  const chatLi = document.createElement('li');
  chatLi.classList.add('chatbot__chat', className);
  let chatContent =
    className === 'outgoing'
      ? `<p></p>`
      : `<span class="material-symbols-outlined">smart_toy</span> <p></p>`;
  chatLi.innerHTML = chatContent;
  chatLi.querySelector('p').textContent = message;
  return chatLi;
};

const generateResponse = (incomingChatLi) => {
  const API_URL = 'https://api.openai.com/v1/chat/completions';
  const messageElement = incomingChatLi.querySelector('p');

  const requestOptions = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      Authorization: `Bearer ${API_KEY}`,
    },
    body: JSON.stringify({
      model: 'gpt-3.5-turbo',
      message: [{ role: 'user', content: userMessage }],
    }),
  };
  fetch(API_URL, requestOptions)
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      messageElement.textContent = data.choices[0].message.content;
    })
    .catch((error) => {
      messageElement.classList.add('error');
      messageElement.textContent = 'received", "Great to hear that!';
      console.log(error);
    })
    .finally(() => chatBox.scrollTo(0, chatBox.scrollHeight));
};

const handleChat = () => {
  userMessage = chatInput.value.trim();
  if (!userMessage) return;
  chatInput.value = '';
  chatInput.style.height = `${inputInitHeight}px`;

  chatBox.appendChild(createChatLi(userMessage, 'outgoing'));
  chatBox.scrollTo(0, chatBox.scrollHeight);

  setTimeout(() => {
    const incomingChatLi = createChatLi('Thinking...', 'incoming');
    chatBox.appendChild(incomingChatLi);
    chatBox.scrollTo(0, chatBox.scrollHeight);
    generateResponse(incomingChatLi);
  }, 600);
};

chatInput.addEventListener('input', () => {
  chatInput.style.height = `${inputInitHeight}px`;
  chatInput.style.height = `${chatInput.scrollHeight}px`;
});
chatInput.addEventListener('keydown', (e) => {
  if (e.key === 'Enter' && !e.shiftKey && window.innerWidth > 800) {
    e.preventDefault();
    handleChat();
  }
});
chatbotToggle.addEventListener('click', () =>
  document.body.classList.toggle('show-chatbot')
);
chatbotCloseBtn.addEventListener('click', () =>
  document.body.classList.remove('show-chatbot')
);
sendChatBtn.addEventListener('click', handleChat);

   </script>
   <!-- Utilize Mobile Menu End -->