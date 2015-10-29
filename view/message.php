{include file="include/header1.php"}
<title>Message</title>
{include file="include/header2.php"}

<div class="row container">
    <h1>留言</h1>
    <ul>
        {foreach $message as $this}
        <li>
            {$this.text} - <strong>{$this.nickname}</strong>
        </li>
        {/foreach}
    </ul>
    <form class="form-inline" id="SendMessage" action="/send_message/" method="post">
      <div class="form-group">
        <label for="exampleInputName2">Nickname</label>
        <input type="text" class="form-control" name="nickname" id="exampleInputName2" placeholder="Jane Doe">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Message</label>
        <textarea class="form-control" name="message" id="exampleInputEmail2" ></textarea>
      </div>
      <button type="submit" class="btn btn-default">Send Message</button>
    </form>
    <p class="alert" id="result"></p>
</div>
<script type="text/javascript" src="/static/js/jquery.js"></script>
<script type="text/javascript">
$(function () {
    $('#SendMessage').on("submit", function () {
        var $this = $(this)
        var url = $this.attr('action')
        var type = $this.attr('method')
        $.ajax({
            url: url,
            type: type,
            dataType: 'json'
        }).done(function (data) {
            if (data.status === 'success') {
                $('#result').addClass("alert-success").removeClass("alert-danger").html('ok')
            }
            else {
                $('#result').addClass("alert-danger").removeClass("alert-success").html(data.msg)
            }
        })
        return false
    })
})
</script>
{include file="include/footer1.php"}