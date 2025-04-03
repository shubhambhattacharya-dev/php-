#SetUP
<hr>
# PHP Setup Guide with VS Code & XAMPP  
**A Simple Step-by-Step Guide to Start PHP Development**  

---

## 1. Install XAMPP  
- **Download XAMPP**:  
  - Visit [Apache Friends](https://www.apachefriends.org/) and download the XAMPP installer for your OS (Windows/macOS/Linux).  

- **Installation**:  
  - Run the installer.  
  - **Select Components**: Check `PHP` and `MySQL`/`MariaDB` (for databases).  
  - Follow on-screen instructions to complete installation.  

- **Start the Server**:  
  - Open the **XAMPP Control Panel**.  
  - Start the `Apache` module (click `Start`).  
  - (Optional) Start `MySQL` if using databases.  

---

## 2. Install Visual Studio Code  
- **Download VS Code**:  
  - Go to the [VS Code Download Page](https://code.visualstudio.com/) and install it.  

- **Essential Extensions**:  
  - Open VS Code → Click the **Extensions icon** (or `Ctrl+Shift+X`).  
  - Search and install:  
    - ✅ **PHP Intelephense** (code completion & syntax checks).  
    - ✅ **PHP Debug** (debugging support).  
    - ✅ **PHP Snippets** (quick code templates).  

---

## 3. Configure PHP in VS Code  
- **Locate PHP Path**:  
  - XAMPP installs PHP in its directory.  
  - **Windows**: `C:\xampp\php\php.exe`  
  - **macOS/Linux**: `/opt/lampp/bin/php`  

- **Set PHP Path in VS Code**:  
  - Open VS Code Settings (`File > Preferences > Settings` or `Ctrl+,`).  
  - Search for `php.validate.executablePath`.  
  - Click **Edit in settings.json** and add:  
    ```json
    "php.validate.executablePath": "C:\\xampp\\php\\php.exe"
    ```  
    *(Adjust the path for macOS/Linux as above.)*

---

## 4. Create a PHP Project  
- **Web Root Folder**:  
  - Navigate to the `htdocs` folder in your XAMPP directory:  
    - **Windows**: `C:\xampp\htdocs`  
    - **macOS/Linux**: `/opt/lampp/htdocs`  

- **Setup Project**:  
  - Create a folder inside `htdocs` (e.g., `my_php_project`).  
  - Open this folder in VS Code (`File > Open Folder`).  

- **Create a PHP File**:  
  - Right-click in the Explorer → `New File` → Name it `index.php`.  
  - Add sample code:  
    ```php
    <?php
      echo "Hello, PHP!";
    ?>
    ```  

---

## 5. Run & Test Your Code  
- **Start XAMPP Services**:  
  - Ensure `Apache` is running in the XAMPP Control Panel.  

- **Test in Browser**:  
  - Open `http://localhost/my_php_project/index.php` in your browser.  
  - You should see **"Hello, PHP!"** displayed.  

- **Debugging (Optional)**:  
  - Install the **PHP Debug** extension (see Step 2).  
  - Press `F5` or go to `Run > Start Debugging` to initialize debugging.  
  - The extension will guide you to configure `launch.json` automatically.  

---

✅ **Done!** Your PHP environment is ready.  
👉 **Next Steps**: Start building dynamic web apps with PHP!  
<hr>
