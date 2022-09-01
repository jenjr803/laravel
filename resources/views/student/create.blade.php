<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<h2 class="text-center">新增資料</h2>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>姓名</th>
                <th>國文</th>
                <th>英文</th>
                <th>數學</th>
            </tr>
        </thead>
        <form action="{{route('student.store')}}" method="post">
            {{-- @csrf 安全機制 --}}
            @csrf
        <tbody>
            <tr>
                <td>
                    <input type="text" name="name" id="name">
                </td>
                <td>
                    <input type="number" name="chinese" id="chinese">
                </td>
                <td>
                    <input type="number" name="english" id="english">
                </td>
                <td>
                    <input type="number" name="submit" id="submit">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="add submit">
                </td>
            </tr>
        </tbody>
    </form>
    </table>
</div>
