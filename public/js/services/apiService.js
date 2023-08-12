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
                    const dataReceive = data.data;
                    const listKeys = Object.keys(dataReceive);

                    const ignore = [
                        'id',
                        'password',
                        'created_at',
                        'updated_at',
                        'email_verified_at',
                        'remember_token',
                    ];

                    const tdElms = listKeys.filter(key => !ignore.includes(key)).map(key => `<td>${dataReceive[key]}</td>`).join('');

                    const html = `<tr data-id="${dataReceive.id}" role="row" class="even">
                                    <td class="sorting_1">${dataReceive.id}</td>
                                    ${tdElms}
                                    <td>
                                            <a onclick="changeID(${dataReceive.id})" id="button-component" class="warning " data-toggle="modal" data-target=".edit-form-modal">
                                                <span class="text">
                                                    <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Pencil.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                        
                                            <a onclick="deleteWithID(${dataReceive.id})" id="button-component" class="danger " data-toggle="modal" data-target="#deleteModal">
                                                <span class="text">
                                                        <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Trash.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                    
                                    </td>
                                </tr>`;

                    const elmID = 'jquery-dt-tbody';

                    console.log(html)

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
    },
    put(url, data) {
        fetch(url, {
            method: 'PUT',
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
                    const dataReceive = data.data;
                    const listKeys = Object.keys(dataReceive);

                    const ignore = [
                        'id',
                        'password',
                        'created_at',
                        'updated_at',
                        'email_verified_at',
                        'remember_token',
                    ];

                    const tdElms = listKeys.filter(key => !ignore.includes(key)).map(key => `<td>${dataReceive[key]}</td>`).join('');

                    const html = `<td class="sorting_1">${dataReceive.id}</td>
                                    ${tdElms}
                                    <td>
                                            <a onlick="changeID(${dataReceive.id})" id="button-component" class="warning " data-toggle="modal" data-target=".launch-pricing-modal">
                                                <span class="text">
                                                    <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Pencil.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                        
                                            <a id="button-component" class="danger " data-toggle="modal" data-target=".launch-pricing-modal">
                                                <span class="text">
                                                        <img style="position: relative; right: 0; top: 0;" class="svg-icon" src="/svg/basic-icons/Trash.svg" alt="SVG Icon">
                                                </span>
                                            </a>                                    
                                    </td>`;

                    const elmID = 'jquery-dt-tbody';

                    this.updateChild(html, elmID, dataReceive.id);
                    
                    toast({
                        title: 'Update Success',
                        message: 'Successfully update data',
                        type: 'success'
                    })
                }
                
            })
            .catch(error => {
                console.log(error)
            });
    },
    updateChild(html, elmID, trDataId) {
        const newChild = document.createElement('tr');
        newChild.dataset.id = trDataId;
        newChild.role = "row";
        newChild.classList.add('even')
        newChild.innerHTML = html
        const childToUpdate = document.querySelector(`#${elmID} tr[data-id='${trDataId}']`)
        childToUpdate.replaceWith(newChild)
    },
    delete(url) {
        fetch(url, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken, // Thay csrfToken bằng giá trị thực tế
                'Authorization': `Bearer ${JSON.parse(localStorage.getItem('access_token'))}`
            },
        })
            .then(response => response.json())
            .then(data => {
                if (data.isSuccess) {
                    const dataReceive = data.data;
                    
                    this.removeChild(dataReceive.id)
                    
                    toast({
                        title: 'Delete Success',
                        message: 'Successfully delete data',
                        type: 'success'
                    })
                }
                
            })
            .catch(error => {
                console.log(error)
            });
    },
    removeChild(id) {
        const childToDelete = document.querySelector(`#jquery-dt-tbody tr[data-id='${id}']`)
        childToDelete.remove();
    }
}