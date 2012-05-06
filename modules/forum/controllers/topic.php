<?php
Class Controller_Topic Extends Controller {
	
	
	
	function index_param(){
		$db=Registry::get("db");
		$topic = $db->query("select * from `forum_topics` where `id` = '".intval($_GET['param'])."';")->fetch();
		$subForum = $db->query("select * from `forum_sub` where `id` = '$topic[id_subforum]';")->fetch();
		$Forum = $db->query("select * from `forums` where `id` = '$topic[id_forum]';")->fetch();
		$this->title=$topic['name'];
		
		
		$pages= new Paginator($db->query("select count(*) from `forum_posts` where `id_topic` = '$topic[id]';")->fetchColumn());
		$queryTopics = $db->query("select * from `forum_posts` where `id_topic` = '$topic[id]' order by `time` asc limit {$pages->getLimit()} ");
		
		while($post = $queryTopics->fetch())
		{
			$post['user']=new User($post['id_user']);
			$posts[]=$post;
		}
		$this->assign("post",$posts);
		
	}
}

?>