<form action="/" method="POST">
    @csrf
    <input type="text" name="request_url" placeholder="API URL"><br>
    <textarea name="headers" placeholder="Headers (JSON format)"></textarea><br>
    <textarea name="body" placeholder="Request Body"></textarea><br>
    <button type="submit">Submit</button>
</form>
