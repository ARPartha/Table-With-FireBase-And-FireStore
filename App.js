const userList = document.querySelector('#list');

// render data

function renderdata(element) {
    let li = document.createElement('tr');
    let Name = document.createElement('td');
    let Phone = document.createElement('td');
    let Email = document.createElement('td');
    let DateOfBirth = document.createElement('td');
    let HousingSavingNo = document.createElement('td');
    let Address = document.createElement('td');
    /////////////// NID FORNT
    let NidFcol = document.createElement('td');
    let NIDFront = document.createElement('a');
    let div = document.createElement('div');
    let Nfiframe = document.createElement('img');
    NIDFront.classList.add('Nid');
    div.classList.add('box');
    Nfiframe.style.width = '250px';
    Nfiframe.style.height = '200px';
    Nfiframe.src = element.data().NIDFront;


    ////////////// NID FRONT
    ////////////// NID BACK
    let NidBcol = document.createElement('td');
    let NIDBack = document.createElement('a');
    let bdiv = document.createElement('div');
    let Nbiframe = document.createElement('img');
    NIDBack.classList.add('bNid');
    bdiv.classList.add('bbox');
    Nbiframe.style.width = '250px';
    Nbiframe.style.height = '200px';
    Nbiframe.src = element.data().NIDBack;


    ///////////// NID BACK
    li.setAttribute('row-id', element.id);
    Name.textContent = element.data().Name;
    Phone.textContent = element.data().MobileNumber;
    Email.textContent = element.data().Email;
    DateOfBirth.textContent = element.data().DateOfBirth;
    Address.textContent = element.data().Address;
    HousingSavingNo.textContent = element.data().HousingSavingNo;
    NIDFront.textContent = element.data().NIDFront;
    NIDBack.textContent = element.data().NIDBack;
    NIDBack.textContent = element.data().NIDBack;
    li.appendChild(Name);
    li.appendChild(Phone);
    li.appendChild(Email);
    li.appendChild(DateOfBirth);
    li.appendChild(Address);
    li.appendChild(HousingSavingNo);
    //////////////////// front/////////
    NidFcol.appendChild(NIDFront);
    NidFcol.appendChild(div);
    div.appendChild(Nfiframe);
    li.appendChild(NidFcol);
    //////////////////////back
    NidBcol.appendChild(NIDBack);
    NidBcol.appendChild(bdiv);
    bdiv.appendChild(Nbiframe);
    li.appendChild(NidBcol);
    //li.appendChild(NIDFront);
    //li.appendChild(NIDBack);
    //li.appendChild(li2);
    userList.appendChild(li);

}


db.collection('user').get().then((snapshot) => {
    console.log(snapshot.docs);
    snapshot.docs.forEach(element => {
        console.log(element.data())
        renderdata(element);
    });
})