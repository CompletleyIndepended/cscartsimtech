{if $department_data}
    {assign var="id" value=$department_data.department_id}
{else}
    {assign var="id" value=0}
{/if}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="department_form1" enctype="multipart/form-data">
    <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
    <input type="hidden" class="cm-no-hide-input" name="department_id" value="{$id}" />

    <div id="content_general">
        <div class="control-group">
            <label for="elm_department_name" class="control-label cm-required">{__("name")}</label>
            <div class="controls">
                <input type="text" name="department_data[department]" id="elm_department_name" value="{$department_data.department}" size="25" class="input-large" />
            </div>
        </div>

        <div class="control-group" id="banner_graphic">
            <label class="control-label">{__("image")}</label>
            <div class="controls">
                {include file="common/attach_images.tpl"
                    image_name="department"
                    image_object_type="department"
                    image_pair=$department_data.main_pair
                    image_object_id=$id
                    no_detailed=true
                    hide_titles=false 
                }
            </div>
        </div>
        
        <div class="control-group">
            <label class="control-label" for="elm_department_timestamp_{$id}">{__("creation_date")}</label>
            <div class="controls">
                {include file="common/calendar.tpl" date_id="elm_department_timestamp_`$id`" date_name="department_data[timestamp]" date_val=$department_data.timestamp|default:$smarty.const.TIME start_year=$settings.Company.company_start_year}
            </div>
        </div>

        {include file="common/select_status.tpl" input_name="department_data[status]" id="elm_department_status" obj_id=$id obj=$department_data hidden=false}

        {* Choose direct *}

<div class="control-group">
            <label class="control-label">{__("manager")}</label>
            <div class="controls">
                {include
                    view_mode="single_button"
                    file="pickers/users/picker.tpl"
                    but_text=__("add_recipients_from_users")
                    data_id="department_users"
                    but_meta="btn"
                    input_name="department_data[user_id]"
                    item_ids=$department_data.user_id 
                    display = "radio"
                    user_info=$u_info
                }
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">{__("staffers")}</label>
            <div class="controls">
                {include
                    file="pickers/users/picker.tpl"
                    but_text= __("add_staffs")
                    data_id="department_users"
                    but_meta="btn"
                    input_name="department_data[users_ids][]"
                    item_ids=$department_data.users_ids
                }
            </div>
        </div>
    {* Save function *}

    {capture name="buttons"}
        {if !$id}
            {include file="buttons/save_cancel.tpl" but_role="submit-link" but_target_form="department_form1" but_name="dispatch[products.update_department]" }
        {else}
            {include file="buttons/save_cancel.tpl" but_name="dispatch[products.update_department]" but_role="department-link" but_target_form="department_form1" hide_first_button=$hide_first_button hide_second_button=$hide_second_button save=$id }

            {* Delete function *}

            {capture name="tools_list"}
                <li>{btn type="list" text=__("delete") class="cm-confirm" href="products.delete_department?department_id=`$id`" method="POST"}</li>
            {/capture}
            {dropdown content=$smarty.capture.tools_list}
        {/if}
    {/capture}

</form>

{/capture}

{if !$id}
    {$title ="Добавить новую коллекцию"}
{else}
    {$title_start = "Изменить"}
    {$title_end = $department_data.department}
{/if}

{include file="common/mainbox.tpl"
    title_start = $title_start
    title_end = $title_end
    title = $title
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    select_languages=true}

{** department section **}
