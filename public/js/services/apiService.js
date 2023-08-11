const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const apiService = {
    post(url, data) {
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken, // Thay csrfToken bằng giá trị thực tế
                'Authorization': `Bearer ${JSON.parse(localStorage.getItem('access_token'))}`
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                if (data.isSuccess) {
                    const html = `<tr role="row" class="even">
                                    <td class="sorting_1">${data.data.id}</td>
                                    <td>${data.data.name}</td>
                                    <td>${data.data.email}</td>
                                    <td>
                                            <a id="button-component" class="warning " data-toggle="modal" data-target=".launch-pricing-modal">
                                                <span class="text">
                                                    <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Pencil.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                        
                                            <a id="button-component" class="danger " data-toggle="modal" data-target=".launch-pricing-modal">
                                                <span class="text">
                                                        <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Trash.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                    
                                    </td>
                                </tr>`;

                    const elmID = 'jquery-dt-tbody';

                    this.renderChild(html, elmID);
                    toast({
                        title: 'Insert Success',
                        message: 'Successfully insert data',
                        type: 'success'
                    })
                }

                
            })
            .catch(error => {
                console.log(error)
            });
    },
    renderChild(html, parentID) {
        const parentElm = document.getElementById(parentID);
        const oldHtml = parentElm.innerHTML;
        parentElm.innerHTML = oldHtml + html;
    }
}