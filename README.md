# 👨‍💼 Laravel REST APIs Development

The Authors and Books API Development with the help of Passport Authentication.

---

## 🌐 Base URL
http://localhost:8000/api/

---

## Tables: Authors & Books
- **Authors** `id, name, email, phone_no, password`  
- **Books** `id, author_id, title, description, book_cost`  


## 📚 API Endpoints

### 👤 1. Register Author

- **URL:** `/api/author/register`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "phone_no": "01700000000",
  "password": "securePassword123"
}
```

- **Success Response:**
```json
{
  "status": true,
  "message": "Author created successfully!",
}
```

### 📝 2. Login Author

- **URL:** `/api/author/login`  
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "email": "john@example.com",
  "password": "securePassword123"
}
```
- **Response:**
```json
{
  "status": true,
  "message": "Login successful!",
  "access_token": "BearerTokenHere"
}
```

### 📝 3. View Profile (Protected)

- **URL:** `/api/author/profile`  
- **Method:** `GET`

- **Response:**
```json
{
  "status": true,
    "message": "Profile Data!",
    "data": {
        "id": 2,
        "name": "Rahim",
        "email": "rahim@gmail.com",
        "phone_no": "01680366446",
        "password": "$2y$12$bk1L3eBt4coVUTbxu6rW4eOfCKnyfDXcwu95znLCi.JH9Y4onMA.y"
    }
}
```

### 📝 4. Logout (Protected)

- **URL:** `/api/author/logout`  
- **Method:** `GET`

- **Response:**
```json
{
  "status": true,
  "message": "Author Logout!"
}