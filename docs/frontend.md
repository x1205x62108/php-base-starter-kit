# Frontend Development — Tailwind CSS v4

## 技術定位

ZYX PHP Base 採用 Tailwind CSS v4 正式版本作為前端樣式框架。

Tailwind CSS 使用 CLI 編譯為靜態 CSS，網站執行時不依賴 Node.js、Vite、React 或 Vue。

## 1. 一般使用者：啟動網站

在已完成 PHP 依賴與資料庫初始化的環境中：

Windows：
```powershell
.\scripts\start.ps1
```

Linux / macOS：
```bash
bash scripts/start.sh
```

網站預設位址：[http://127.0.0.1:8000](http://127.0.0.1:8000)

此模式使用版本庫內預先編譯完成的 CSS，不需要 npm。

## 2. 前端開發者：修改 UI

需要 Node.js 與 npm。

首次安裝前端依賴：
```bash
npm install
```

啟動 Tailwind 即時編譯：
```bash
npm run dev
```

注意：PHP Server 和 CSS Watcher 是兩個獨立程序。

## 3. 正式建置 CSS
```bash
npm run build
```
輸出至：`public/assets/css/app.css`

## 4. 目錄規範
- `resources/css/app.css`：Tailwind CSS 原始碼與設計變數
- `resources/views/`：PHP 頁面模板
- `modules/`：模組的 PHP View 與樣式類別
- `public/assets/css/app.css`：編譯完成的 CSS
