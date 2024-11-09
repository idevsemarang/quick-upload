# Quick Upload

**Quick Upload** is a simple file upload project developed by **iDev Semarang**. It allows users to upload files through an HTML form and displays the uploaded files with their upload dates. This project is built using HTML, JavaScript, and PHP.

## Features

- Upload files to the server with a user-friendly interface
- Displays a list of uploaded files with their upload timestamps
- Allows users to view, download, and manage uploaded files
- Developed to be simple and lightweight for quick setup and testing

## Installation

1. **Clone or download this repository**:
    ```bash
    git clone https://github.com/idev-semarang/quick-upload.git
    cd quick-upload
    ```

    for quick download :
     ```bash
    curl -O https://github.com/idevsemarang/quick-upload/archive/refs/heads/main.zip
    unzip main.zip
    ```

2. **Setup upload directory**:
    - Ensure there is an `uploads` folder in the project directory.
    - Make sure the server has write permissions for the `uploads` folder:
      ```bash
      mkdir uploads
      chmod 755 uploads
      ```

3. **Run on a Local PHP Server**:
    - Use the PHP built-in server to test it locally:
      ```bash
      php -S localhost:8000
      ```

4. **Open in Browser**:
    - Open [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

1. **Upload a File**:
   - Navigate to the upload form, click "Choose File" to select a file, and then click "Upload".
   
2. **View Uploaded Files**:
   - The uploaded files will be displayed in a list format, showing the file names and upload dates.
   
3. **Download Files**:
   - Click on a file name in the list to download it.
