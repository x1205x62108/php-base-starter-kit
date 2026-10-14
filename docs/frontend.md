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

## 3. 正式建置與交付規範 (Delivery)

當您修改了 HTML 或 CSS 源碼後，必須產生正式的編譯結果以供交付：

```bash
npm run build
```

**交付規範：**
1. 必須將 `public/assets/css/app.css` 納入 Git 提交。
2. 必須將 `package-lock.json` 納入 Git 提交以確保版本一致。
3. 提交前請確保 `npm run build` 已執行，以更新預編譯結果。

## 4. 目錄規範
- `resources/css/app.css`：Tailwind CSS 原始碼與設計變數
- `resources/views/`：PHP 頁面模板
- `modules/`：模組的 PHP View 與樣式類別
- `public/assets/css/app.css`：編譯完成的 CSS
