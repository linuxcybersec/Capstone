<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot | Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
        }
        .chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #0078d7;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
        .chatbot-container {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 350px;
            height: 500px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }
        .chatbot-header {
            background-color: #0078d7;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 18px;
        }
        .chatbot-messages {
            flex-grow: 1;
            padding: 10px;
            overflow-y: auto;
        }
        .chatbot-input {
            display: flex;
            border-top: 1px solid #ddd;
        }
        .chatbot-input input {
            flex-grow: 1;
            padding: 10px;
            border: none;
            outline: none;
        }
        .chatbot-input button {
            background-color: #0078d7;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<button class="chatbot-button" id="chatbotButton">
    <i class="fas fa-comments"></i>
</button>

<div class="chatbot-container" id="chatbotContainer">
    <div class="chatbot-header">
        Tropic Dodo Chatbot
    </div>
    <div class="chatbot-messages" id="chatbotMessages">
        <div>Hi! I'm your Tropic Dodo assistant. How can I help you today? 😊</div>
    </div>
    <div class="chatbot-input">
        <input type="text" id="chatbotInput" class="form-control" placeholder="Type your message here...">
        <button id="sendButton" class="btn btn-primary">Send</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script>
    const chatbotButton = document.getElementById('chatbotButton');
    const chatbotContainer = document.getElementById('chatbotContainer');
    const chatbotMessages = document.getElementById('chatbotMessages');
    const chatbotInput = document.getElementById('chatbotInput');
    const sendButton = document.getElementById('sendButton');

    chatbotButton.addEventListener('click', () => {
        chatbotContainer.style.display = chatbotContainer.style.display === 'flex' ? 'none' : 'flex';
    });

    sendButton.addEventListener('click', () => {
        const userMessage = chatbotInput.value.trim();
        if (userMessage) {
            displayMessage(userMessage, 'user');
            chatbotInput.value = '';
            setTimeout(() => {
                handleBotResponse(userMessage);
            }, 500);
        }
    });

    function displayMessage(message, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.textContent = message;
        messageDiv.classList.add('mb-2', sender === 'user' ? 'text-end text-primary' : 'text-start text-dark');
        chatbotMessages.appendChild(messageDiv);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }

    function handleBotResponse(userMessage) {
        const lowerCaseMessage = userMessage.toLowerCase();
        let response = "I'm not sure how to answer that. Let me connect you to our support team.";

        if (lowerCaseMessage.includes('book')) {
            response = "To book a package, please visit our booking page or provide your preferred dates and destination.";
        } else if (lowerCaseMessage.includes('refund')) {
            response = "Our refund policy allows cancellations within 7 days of booking. Please email support@tropicdodo.com.";
        } else if (lowerCaseMessage.includes('support')) {
            response = "You can reach our support team at 123-456-7890 or email us at support@tropicdodo.com.";
        }

        displayMessage(response, 'bot');
    }
</script>

</body>
</html>
