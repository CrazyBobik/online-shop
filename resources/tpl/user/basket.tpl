<div class="container" id="entry">
    <h3 class="list-group-item-heading"><b>{Basket}</b></h3>

    <table id="basket" cellpadding="3">
        <tr>
            <th style="text-align: center; width: 68%">
                <h5 class="list-group-item-heading"><b>{Goods}</b></h5>
            </th>
            <th style="text-align: center">
                <h6 class="list-group-item-heading">{Price}</h6>
            </th>
        </tr>
        {items}
        <tr>
            <td colspan="2" id="price">
                {Amount}: {Sum}
            </td>
        </tr>
    </table>

    <form method="post" action="#">
        <h4 class="list-group-item-heading"><b>{enter}</b></h4>
        <input class="form-control" name="login" placeholder="{login}"
               type="text">
        <input class="form-control" name="password" placeholder="{password}"
               type="password">

        <input class="btn btn-block btn-primary" name="submit" value="{enterBtn}"
               type="submit">

        <p style="text-align: center">
            <a href="#">{registration}</a>
        </p>
    </form>
</div>