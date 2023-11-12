<div class="modal fade modal-lg" id="infodepartmentmodal" tabindex="-1" role="dialog" aria-labelledby="infodepartmentmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">Chi tiết - Danh sách Team thuộc phòng ban</p>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td class="fw-bold">Team ID</td>
                                <td class="fw-bold">Tên Team</td>
                            </tr>
                        </thead>
                        <tbody class="team_data">
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<script>
    const infodepartmentmodal = document.getElementById('infodepartmentmodal');

    infodepartmentmodal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        const button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        const teams = JSON.parse(button.getAttribute('data-bs-data'));
        console.log(teams);
        const table_body = document.querySelector(".team_data");

        teams.forEach(team => {
            const row = document.createElement("tr");

            const id = document.createElement("td");
            id.textContent = team.id;
            row.appendChild(id);

            const name = document.createElement("td");
            name.textContent = team.name;
            row.appendChild(name);
            table_body.appendChild(row);
        });
    });
</script>