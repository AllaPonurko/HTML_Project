const model=[
    { type:'title',value:'Welcome'},
    {type: 'text',value: 'Here is impotent information'},
    {type:'columns',value: [
        11111111111,
        22222222222,
        33333333333
        ]

        }
]
const $site=document.querySelector(selectors, '#site')
model.forEach
(block=>
{
    let html='';
    if(block.type==='title')
    {
        html=title(block)
    }

    else if (block.type==='text')
    {
        html=text(block)
    }
    else if(block.type==="columns")
    {
        html=columns(block)
    }
$site.insertAdjacentHTML('beforeend',html)

})
function title(block)
{
    return
        `
        <div class="row">
            <div class="col-sm">
                <h1>${block.value}</h1>
            </div>
        </div>`
}
function text(block)
{
    return`
    <div class="row">
            <div class="col-sm">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, nam.</p>
            </div>
        </div>
    `
}
function columns(block)
{
    return
    `<div class="row">
          <div class="col-sm">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, laboriosam.</p>
          </div>  

          <div class="col-sm">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, laboriosam.
          </div>
          <div class="col-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, laboriosam.
          </div>
    </div> 
    `
}