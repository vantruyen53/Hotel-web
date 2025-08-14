<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Chatbot Demo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 1200px;
            height: 90vh;
            display: flex;
            overflow: hidden;
        }
        
        .sidebar {
            width: 300px;
            background: #2c3e50;
            color: white;
            padding: 20px;
            overflow-y: auto;
        }
        
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: #f8f9fa;
        }
        
        .chat-header {
            background: #34495e;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 3px solid #3498db;
        }
        
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
        }
        
        .message {
            margin-bottom: 15px;
            animation: slideIn 0.3s ease-out;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .user-message {
            text-align: right;
        }
        
        .bot-message {
            text-align: left;
        }
        
        .message-bubble {
            display: inline-block;
            max-width: 70%;
            padding: 12px 18px;
            border-radius: 18px;
            margin: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .user-message .message-bubble {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
        }
        
        .bot-message .message-bubble {
            background: white;
            color: #2c3e50;
            border: 1px solid #ecf0f1;
        }
        
        .chat-input-container {
            padding: 20px;
            background: white;
            border-top: 1px solid #ecf0f1;
            display: flex;
            gap: 10px;
        }
        
        .chat-input {
            flex: 1;
            padding: 12px 18px;
            border: 2px solid #ecf0f1;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }
        
        .chat-input:focus {
            border-color: #3498db;
        }
        
        .send-button {
            padding: 12px 24px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: transform 0.2s;
        }
        
        .send-button:hover {
            transform: translateY(-2px);
        }
        
        .algorithm-display {
            margin-bottom: 20px;
            padding: 15px;
            background: #34495e;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }
        
        .algorithm-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #3498db;
        }
        
        .algorithm-step {
            font-size: 12px;
            margin: 5px 0;
            padding: 5px 10px;
            background: #2c3e50;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        .algorithm-step.active {
            background: #27ae60;
            animation: pulse 0.5s ease-in-out;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .data-structure {
            margin-bottom: 15px;
            padding: 10px;
            background: #2c3e50;
            border-radius: 8px;
            font-size: 12px;
        }
        
        .quick-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 10px 0;
        }
        
        .quick-action-btn {
            padding: 8px 16px;
            background: #ecf0f1;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.3s;
        }
        
        .quick-action-btn:hover {
            background: #3498db;
            color: white;
            transform: translateY(-2px);
        }
        
        .room-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
            transition: transform 0.3s;
        }
        
        .room-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .typing-indicator {
            display: none;
            text-align: left;
        }
        
        .typing-bubble {
            background: white;
            padding: 12px 18px;
            border-radius: 18px;
            display: inline-block;
            border: 1px solid #ecf0f1;
        }
        
        .typing-dots {
            display: inline-block;
        }
        
        .typing-dots span {
            height: 8px;
            width: 8px;
            background: #95a5a6;
            border-radius: 50%;
            display: inline-block;
            margin: 0 2px;
            animation: typing 1.4s infinite ease-in-out;
        }
        
        .typing-dots span:nth-child(1) { animation-delay: -0.32s; }
        .typing-dots span:nth-child(2) { animation-delay: -0.16s; }
        
        @keyframes typing {
            0%, 80%, 100% { transform: scale(0.8); opacity: 0.5; }
            40% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar với Algorithm Visualization -->
        <div class="sidebar">
            <h3>🧠 Algorithm Monitor</h3>
            
            <div class="algorithm-display">
                <div class="algorithm-title">🔍 Keyword Matching (Trie Tree)</div>
                <div id="keyword-steps">
                    <div class="algorithm-step">Waiting for input...</div>
                </div>
            </div>
            
            <div class="algorithm-display">
                <div class="algorithm-title">📊 Room Search (Binary Search)</div>
                <div id="search-steps">
                    <div class="algorithm-step">Ready to search...</div>
                </div>
            </div>
            
            <div class="algorithm-display">
                <div class="algorithm-title">🎯 Recommendation Engine</div>
                <div id="recommendation-steps">
                    <div class="algorithm-step">Standby...</div>
                </div>
            </div>
            
            <div class="data-structure">
                <strong>📈 Current Data:</strong><br>
                <div id="current-data">
                    Rooms: 50 total<br>
                    Available: <span id="available-count">32</span><br>
                    Services: 15 types<br>
                    Active searches: <span id="search-count">0</span>
                </div>
            </div>
        </div>
        
        <!-- Main Chat Area -->
        <div class="chat-container">
            <div class="chat-header">
                <h2>🏨 Smart Hotel Assistant</h2>
                <p>Powered by Advanced Algorithms & Data Structures</p>
            </div>
            
            <div class="chat-messages" id="chatMessages">
                <div class="message bot-message">
                    <div class="message-bubble">
                        Xin chào! Tôi là AI Assistant của khách sạn. Tôi có thể giúp bạn:
                        <br>🏠 Tìm và đặt phòng
                        <br>🛎️ Tư vấn dịch vụ
                        <br>💰 Kiểm tra giá cả
                        <br>📅 Xem lịch trống
                    </div>
                </div>
                
                <div class="quick-actions">
                    <button class="quick-action-btn" onclick="sendQuickMessage('Tôi muốn đặt phòng')">Đặt phòng</button>
                    <button class="quick-action-btn" onclick="sendQuickMessage('Các dịch vụ có gì?')">Dịch vụ</button>
                    <button class="quick-action-btn" onclick="sendQuickMessage('Giá phòng bao nhiêu?')">Bảng giá</button>
                    <button class="quick-action-btn" onclick="sendQuickMessage('Phòng nào còn trống?')">Phòng trống</button>
                </div>
                
                <div class="message typing-indicator" id="typingIndicator">
                    <div class="typing-bubble">
                        <div class="typing-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="chat-input-container">
                <input type="text" 
                       class="chat-input" 
                       id="messageInput" 
                       placeholder="Nhập câu hỏi của bạn..."
                       onkeypress="handleKeyPress(event)">
                <button class="send-button" onclick="sendMessage()">Gửi</button>
            </div>
        </div>
    </div>

    <script>
        // Data Structures & Mock Database
        class TrieNode {
            constructor() {
                this.children = {};
                this.isEndOfWord = false;
                this.intent = null;
            }
        }
        
        class Trie {
            constructor() {
                this.root = new TrieNode();
            }
            
            insert(word, intent) {
                let current = this.root;
                for (let char of word.toLowerCase()) {
                    if (!(char in current.children)) {
                        current.children[char] = new TrieNode();
                    }
                    current = current.children[char];
                }
                current.isEndOfWord = true;
                current.intent = intent;
            }
            
            search(word) {
                let current = this.root;
                for (let char of word.toLowerCase()) {
                    if (!(char in current.children)) {
                        return null;
                    }
                    current = current.children[char];
                }
                return current.isEndOfWord ? current.intent : null;
            }
        }
        
        // Room Database với Binary Search Tree structure
        const roomDatabase = [
            { id: 101, type: 'Standard', price: 800000, capacity: 2, available: true, amenities: ['WiFi', 'TV', 'AC'] },
            { id: 102, type: 'Standard', price: 800000, capacity: 2, available: false, amenities: ['WiFi', 'TV', 'AC'] },
            { id: 201, type: 'Deluxe', price: 1200000, capacity: 3, available: true, amenities: ['WiFi', 'TV', 'AC', 'Minibar'] },
            { id: 202, type: 'Deluxe', price: 1200000, capacity: 3, available: true, amenities: ['WiFi', 'TV', 'AC', 'Minibar'] },
            { id: 301, type: 'Suite', price: 2000000, capacity: 4, available: true, amenities: ['WiFi', 'TV', 'AC', 'Minibar', 'Balcony'] },
            { id: 302, type: 'Suite', price: 2000000, capacity: 4, available: false, amenities: ['WiFi', 'TV', 'AC', 'Minibar', 'Balcony'] },
            { id: 401, type: 'Presidential', price: 5000000, capacity: 6, available: true, amenities: ['WiFi', 'TV', 'AC', 'Minibar', 'Balcony', 'Jacuzzi'] }
        ];
        
        const serviceDatabase = [
            { name: 'Spa & Massage', price: 500000, duration: '60 phút', hours: '9:00-22:00' },
            { name: 'Gym & Fitness', price: 200000, duration: 'Cả ngày', hours: '6:00-23:00' },
            { name: 'Swimming Pool', price: 150000, duration: 'Cả ngày', hours: '6:00-22:00' },
            { name: 'Restaurant', price: 300000, duration: 'Per meal', hours: '6:00-23:00' },
            { name: 'Laundry Service', price: 100000, duration: '24h', hours: '24/7' },
            { name: 'Airport Transfer', price: 400000, duration: '1 chuyến', hours: '24/7' }
        ];
        
        // Initialize Trie with keywords
        const keywordTrie = new Trie();
        
        // Insert keywords và intents
        const keywords = [
            // Room related
            ['phòng', 'ROOM_INQUIRY'],
            ['đặt phòng', 'ROOM_BOOKING'],
            ['book', 'ROOM_BOOKING'],
            ['giá phòng', 'ROOM_PRICE'],
            ['phòng trống', 'ROOM_AVAILABILITY'],
            ['available', 'ROOM_AVAILABILITY'],
            
            // Service related
            ['dịch vụ', 'SERVICE_INQUIRY'],
            ['service', 'SERVICE_INQUIRY'],
            ['spa', 'SERVICE_SPECIFIC'],
            ['gym', 'SERVICE_SPECIFIC'],
            ['massage', 'SERVICE_SPECIFIC'],
            ['restaurant', 'SERVICE_SPECIFIC'],
            
            // Price related
            ['giá', 'PRICE_INQUIRY'],
            ['price', 'PRICE_INQUIRY'],
            ['bao nhiêu', 'PRICE_INQUIRY'],
            ['cost', 'PRICE_INQUIRY'],
            
            // General
            ['help', 'HELP'],
            ['giúp', 'HELP']
        ];
        
        keywords.forEach(([word, intent]) => {
            keywordTrie.insert(word, intent);
        });
        
        // State management
        let conversationState = {
            currentIntent: null,
            bookingData: {},
            searchCount: 0
        };
        
        // Algorithm visualization functions
        function visualizeKeywordMatching(input) {
            const steps = document.getElementById('keyword-steps');
            steps.innerHTML = '';
            
            let stepIndex = 0;
            const addStep = (text, delay = 0) => {
                setTimeout(() => {
                    const step = document.createElement('div');
                    step.className = 'algorithm-step active';
                    step.textContent = text;
                    steps.appendChild(step);
                    
                    setTimeout(() => {
                        step.classList.remove('active');
                    }, 1000);
                }, delay);
            };
            
            addStep(`Input: "${input}"`, 0);
            addStep('Tokenizing words...', 200);
            addStep('Traversing Trie tree...', 400);
            
            // Find matching keywords
            const words = input.toLowerCase().split(' ');
            let found = false;
            words.forEach((word, index) => {
                const intent = keywordTrie.search(word);
                if (intent) {
                    addStep(`✓ Found keyword: "${word}" → ${intent}`, 600 + index * 200);
                    found = true;
                }
            });
            
            if (!found) {
                addStep('No exact match, using fuzzy matching...', 800);
            }
        }
        
        function visualizeRoomSearch(criteria) {
            const steps = document.getElementById('search-steps');
            steps.innerHTML = '';
            
            const addStep = (text, delay = 0) => {
                setTimeout(() => {
                    const step = document.createElement('div');
                    step.className = 'algorithm-step active';
                    step.textContent = text;
                    steps.appendChild(step);
                    
                    setTimeout(() => {
                        step.classList.remove('active');
                    }, 1000);
                }, delay);
            };
            
            addStep('Initializing binary search...', 0);
            addStep('Sorting rooms by criteria...', 300);
            addStep('Applying filters...', 600);
            addStep('Binary search complete!', 900);
            
            // Update search count
            conversationState.searchCount++;
            document.getElementById('search-count').textContent = conversationState.searchCount;
        }
        
        function visualizeRecommendation() {
            const steps = document.getElementById('recommendation-steps');
            steps.innerHTML = '';
            
            const addStep = (text, delay = 0) => {
                setTimeout(() => {
                    const step = document.createElement('div');
                    step.className = 'algorithm-step active';
                    step.textContent = text;
                    steps.appendChild(step);
                    
                    setTimeout(() => {
                        step.classList.remove('active');
                    }, 1000);
                }, delay);
            };
            
            addStep('Analyzing user preferences...', 0);
            addStep('Calculating similarity scores...', 300);
            addStep('Ranking recommendations...', 600);
            addStep('Recommendation ready!', 900);
        }
        
        // Message processing functions
        function detectIntent(message) {
            const words = message.toLowerCase().split(' ');
            let intents = [];
            
            // Exact keyword matching using Trie
            words.forEach(word => {
                const intent = keywordTrie.search(word);
                if (intent) {
                    intents.push(intent);
                }
            });
            
            // Fuzzy matching for common patterns
            if (message.includes('đặt') || message.includes('book')) {
                intents.push('ROOM_BOOKING');
            }
            
            if (message.includes('giá') || message.includes('price') || message.includes('bao nhiêu')) {
                intents.push('PRICE_INQUIRY');
            }
            
            if (message.includes('trống') || message.includes('available')) {
                intents.push('ROOM_AVAILABILITY');
            }
            
            return intents.length > 0 ? intents[0] : 'GENERAL_INQUIRY';
        }
        
        function searchRooms(criteria = {}) {
            visualizeRoomSearch(criteria);
            
            let results = roomDatabase.filter(room => {
                if (criteria.available !== undefined && room.available !== criteria.available) {
                    return false;
                }
                if (criteria.maxPrice && room.price > criteria.maxPrice) {
                    return false;
                }
                if (criteria.minPrice && room.price < criteria.minPrice) {
                    return false;
                }
                if (criteria.capacity && room.capacity < criteria.capacity) {
                    return false;
                }
                if (criteria.type && room.type.toLowerCase() !== criteria.type.toLowerCase()) {
                    return false;
                }
                return true;
            });
            
            // Sort by price (Binary Search Tree principle)
            results.sort((a, b) => a.price - b.price);
            
            return results;
        }
        
        function generateResponse(message, intent) {
            switch (intent) {
                case 'ROOM_INQUIRY':
                case 'ROOM_AVAILABILITY':
                    const availableRooms = searchRooms({ available: true });
                    let response = `🏠 Hiện tại có ${availableRooms.length} phòng trống:\n\n`;
                    
                    availableRooms.forEach(room => {
                        response += `<div class="room-card">
                            <strong>Phòng ${room.id} - ${room.type}</strong><br>
                            💰 Giá: ${room.price.toLocaleString('vi-VN')} VNĐ/đêm<br>
                            👥 Sức chứa: ${room.capacity} người<br>
                            ✨ Tiện nghi: ${room.amenities.join(', ')}
                        </div>`;
                    });
                    
                    return response;
                
                case 'ROOM_BOOKING':
                    visualizeRecommendation();
                    return `📝 Để đặt phòng, tôi cần một số thông tin:\n
                            • Số lượng khách: ? người
                            • Ngày nhận phòng: ?
                            • Số đêm ở: ?
                            • Khoảng giá mong muốn: ?
                            
                            Vui lòng cho tôi biết chi tiết để tìm phòng phù hợp nhất!`;
                
                case 'PRICE_INQUIRY':
                case 'ROOM_PRICE':
                    let priceResponse = '💰 Bảng giá phòng hiện tại:\n\n';
                    const priceMap = {};
                    
                    roomDatabase.forEach(room => {
                        if (!priceMap[room.type]) {
                            priceMap[room.type] = room.price;
                        }
                    });
                    
                    Object.entries(priceMap).forEach(([type, price]) => {
                        priceResponse += `• ${type}: ${price.toLocaleString('vi-VN')} VNĐ/đêm\n`;
                    });
                    
                    return priceResponse;
                
                case 'SERVICE_INQUIRY':
                    let serviceResponse = '🛎️ Các dịch vụ khách sạn:\n\n';
                    
                    serviceDatabase.forEach(service => {
                        serviceResponse += `<div class="room-card">
                            <strong>${service.name}</strong><br>
                            💰 Giá: ${service.price.toLocaleString('vi-VN')} VNĐ<br>
                            ⏰ Thời gian: ${service.duration}<br>
                            🕒 Giờ mở cửa: ${service.hours}
                        </div>`;
                    });
                    
                    return serviceResponse;
                
                case 'SERVICE_SPECIFIC':
                    const serviceName = message.toLowerCase();
                    const foundService = serviceDatabase.find(s => 
                        serviceName.includes(s.name.toLowerCase()) ||
                        s.name.toLowerCase().includes(serviceName)
                    );
                    
                    if (foundService) {
                        return `ℹ️ Thông tin ${foundService.name}:
                                💰 Giá: ${foundService.price.toLocaleString('vi-VN')} VNĐ
                                ⏰ Thời gian: ${foundService.duration}
                                🕒 Giờ hoạt động: ${foundService.hours}`;
                    }
                    break;
                
                default:
                    return `🤖 Tôi hiểu bạn đang hỏi về "${message}". 
                            Tôi có thể giúp bạn với:
                            • Tìm kiếm và đặt phòng
                            • Thông tin dịch vụ khách sạn  
                            • Bảng giá và ưu đãi
                            • Tình trạng phòng trống
                            
                            Bạn có thể hỏi cụ thể hơn không?`;
            }
        }
        
        // UI Functions
        function addMessage(content, isUser = false) {
            const messagesContainer = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isUser ? 'user-message' : 'bot-message'}`;
            
            const bubble = document.createElement('div');
            bubble.className = 'message-bubble';
            bubble.innerHTML = content;
            
            messageDiv.appendChild(bubble);
            
            // Insert before typing indicator
            const typingIndicator = document.getElementById('typingIndicator');
            messagesContainer.insertBefore(messageDiv, typingIndicator);
            
            // Scroll to bottom
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
        
        function showTypingIndicator() {
            const indicator = document.getElementById('typingIndicator');
            indicator.style.display = 'block';
            
            const messagesContainer = document.getElementById('chatMessages');
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
        
        function hideTypingIndicator() {
            const indicator = document.getElementById('typingIndicator');
            indicator.style.display = 'none';
        }
        
        function sendMessage() {
            const input = document.getElementById('messageInput');
            const message = input.value.trim();
            
            if (!message) return;
            
            // Add user message
            addMessage(message, true);
            input.value = '';
            
            // Show typing indicator
            showTypingIndicator();
            
            // Visualize keyword matching
            visualizeKeywordMatching(message);
            
            // Process message
            setTimeout(() => {
                const intent = detectIntent(message);
                const response = generateResponse(message, intent);
                
                hideTypingIndicator();
                addMessage(response, false);
                
                // Update available room count (simulation)
                const availableCount = roomDatabase.filter(r => r.available).length;
                document.getElementById('available-count').textContent = availableCount;
                
            }, 1500); // Simulate processing time
        }
        
        function sendQuickMessage(message) {
            const input = document.getElementById('messageInput');
            input.value = message;
            sendMessage();
        }
        
        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            // Focus on input
            document.getElementById('messageInput').focus();
        });
    </script>
</body>
</html>