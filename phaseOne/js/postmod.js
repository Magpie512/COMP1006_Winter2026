function toggleEdit(id) {
    const container = document.getElementById('display-' + id);
    const currentText = container.querySelector('.content-text').innerText;

    // replaces the text with a small form that points back to process.php
    container.innerHTML = `
        <form action="process.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="${id}">
            <textarea name="content" class="form-control" rows="3">${currentText}</textarea>
            <div style="margin-top: 5px;">
                <button type="submit" class="btn-interaction" style="background: #2ecc71; color: white;">Save</button>
                <button type="button" class="btn-interaction" onclick="location.reload()">Cancel</button>
            </div>
        </form>
    `;
}