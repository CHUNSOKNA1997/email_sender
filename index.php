<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email - Sender</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <form action="sender.php" method="POST" class="w=screen min-h-screen text-white gap-7 flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold text-black">Contact vai Email</h1>

        <div class="w-[500px] bg-teal-800 h-auto flex flex-col items=center justify-center gap-7 p-6 rounded-xl">
            <input type="text" name="name" placeholder="name" class="py-4 px-6 outline outline-gray-400 text-xl placeholder:font-normal rounded-full">
            <input type="email" name="email" placeholder="eg. example@gmail.com" class="py-4 px-6 outline outline-gray-400 text-xl placeholder:font-normal rounded-full">
            <input type="text" name="subject" placeholder="subject" class="py-4 px-6 outline outline-gray-400 text-xl placeholder:font-normal rounded-full">
            <textarea name="message" cols="50" rows="10" class="outline ouline-gray-400 rounded-lg p-4" placeholder="your message"></textarea>
            <button type="submit" name="submit" class="w-full py-3 bg-green-600 rounded-full text-white hover:bg-green-700 hover:cursor-pointer transitions-corlors duration-300">Send</button>
        </div>
    </form>
</body>
</html>