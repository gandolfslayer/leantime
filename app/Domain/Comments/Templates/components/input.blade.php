<form hx-post="{{ BASE_URL }}/comments/comment-list/save?module={{ $module }}&moduleId={{ $moduleId }}"
      hx-target="#comments-{{ $module }}-{{ $moduleId }}">
    <div id="commentReplyBox-{{ $formHash }}-{{ $parentId }}" class="commentBox-{{ $formHash }} commentReplyBox-{{ $formHash }} commenterFields tw-hidden tw-mb-sm" >
        <div class="commentImage">
            <x-users::profile-image :user="array('id'=> session('userdata.id'), 'modified' => session('userdata.modified'))" ></x-users::profile-image>
        </div>
        <div class="commentReply">
            <x-global::forms.submit-button name="{{ __('links.save') }}" />
            <x-global::forms.reset-button name="{{ __('links.cancel') }}" onclick="leantime.commentsComponent.resetForm(-1, '{{ $formHash }}')" />
        </div>
        <input type="hidden" name="saveComment" class="commenterField" value="1"/>
        <input type="hidden" name="editComment" class="commenterField" id="edit-comment-{{ $formHash }}-{{ $parentId }}" value="" />
        <input type="hidden" name="father" class="commenterField" id="father-{{ $formHash }}" value="{{ $parentId }}"/>

        <div class="clearall"></div>
        <br/>
    </div>
</form>
